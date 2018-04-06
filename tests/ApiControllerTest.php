<?php

use App\Http\Controllers\ApiController;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiControllerTest extends TestCase
{
   	public $api;

	public function setUp()
	{
		$this->api = new ApiController();
	}

   	public function testGetFetchAll()
   	{
   		$this->assertTrue($this->api->getFetchAll());
   	}

   	public function testGetFetchSingle()
   	{
   		$this->assertTrue($this->api->getFetchSingle());
   	}
}
