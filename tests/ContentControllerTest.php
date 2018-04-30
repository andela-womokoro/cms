<?php

use App\Http\Controllers\ContentController;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContentControllerTest extends TestCase
{
    use WithoutMiddleware;

    public function testIndex()
    {
        $this->visit('/')
            ->click('Contents')
            ->seePageIs('/content/view');
    }

    public function testCreate()
    {
        $this->visit('/')
            ->click('Create New')
            ->seePageIs('/content/new');
    }

    public function testStore()
    {
        $this->visit('/')
            ->click('Create New')
            ->type('Test title', 'title')
            ->select('Engineering', 'industry')
            ->type('foo bar', 'body')
            ->press('Publish')
            ->seePageIs('/content/add');
    }
}
