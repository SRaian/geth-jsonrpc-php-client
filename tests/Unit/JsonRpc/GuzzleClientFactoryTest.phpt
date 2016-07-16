<?php

namespace Achse\GethJsonRpcPhpClient\Tests\Unit\JsonRpc;

require_once __DIR__ . '/../../bootstrap.php';

use GuzzleHttp\Client as GuzzleHttpClient;
use Achse\GethJsonRpcPhpClient\JsonRpc\GuzzleClientFactory;
use Tester\Assert;
use Tester\TestCase;



class GuzzleClientFactoryTest extends TestCase
{

	public function testCreate()
	{
		$factory = new GuzzleClientFactory();
		Assert::type(GuzzleHttpClient::class, $factory->create([]));
	}

}



(new GuzzleClientFactoryTest())->run();
