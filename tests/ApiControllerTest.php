<?php

use App\Http\Controllers\ApiController;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiControllerTest extends TestCase
{
    use WithoutMiddleware;

    //public $api;
    public $expected;

    public function setUp()
    {
        //$this->api = new ApiController();

        $this->expected = json_encode([
            'error' => 'Not found',
            'contents' => [],
            'status_code' => 404
        ]);
    }

    public function testGetFetchAll()
    {
        //$result = $this->api->getFetchAll(0);
        $result = $this->call('GET', '/api/v1/1/contents');

        $this->assertJsonStringEqualsJsonString($result, $this->expected);
    }

    public function testGetFetchSingle()
    {
        //$result = $this->api->getFetchSingle(0);
        $result = $this->call('GET', '/api/v1/1/contents/1');

        $this->assertJsonStringEqualsJsonString($result, $this->expected);
    }
}
