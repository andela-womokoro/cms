<?php

use App\Http\Controllers\ContentController;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContentControllerTest extends TestCase
{
	public $cms;

	public function setUp()
	{
		$this->cms = new ContentController();
	}

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testGetCreateContent()
    {
    	$this->assertTrue($this->cms->getCreateContent());
    }

    public function testPostCreateContent()
    {
    	$this->assertTrue($this->cms->postCreateContent());
    }
}
