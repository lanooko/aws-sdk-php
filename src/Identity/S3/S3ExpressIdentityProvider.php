<?php
namespace Aws\Identity\S3;

use Aws;
use Aws\LruArrayCache;
use GuzzleHttp\Promise;

class S3ExpressIdentityProvider
{

    private $cache;
    private $s3Client;
    public function __construct(string $clientRegion, array $config = [])
    {
        $this->cache = new LruArrayCache(100);
        $this->s3Client = isset($config['client'])
            ? $config['client'] // internal use only
            : new Aws\S3\S3Client([
                'region' => $clientRegion,
                'disable_express_session_auth' => true
            ]);
    }

    public function __invoke($command)
    {
        return function () use ($command) {
            $bucket = $command['Bucket'];
            if ($identity = $this->cache->get($bucket)) {
                if (!$identity->isExpired()) {
                    return Promise\Create::promiseFor($identity);
                }
            }
            $response = $this->s3Client->createSession(['Bucket' => $bucket]);
            $identity = new Aws\Identity\S3\S3ExpressIdentity(
                $response['Credentials']['AccessKeyId'],
                $response['Credentials']['SecretAccessKey'],
                $response['Credentials']['SessionToken'],
                $response['Credentials']['Expiration']->getTimestamp()
            );
            $this->cache->set($bucket, $identity);
            return Promise\Create::promiseFor($identity);
        };
    }
}