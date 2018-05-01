<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskControllerTest extends TestCase
{
	use WithoutMiddleware;

    /**
     * [testIndex description]
     * @return [type] [description]
     */
    public function testIndex()
    {
    	$this->visit('/')
    		->click('Tasks')
    		->seePageIs('/content/tasks');
    }

    /**
     * [testCreate description]
     * @return [type] [description]
     */
    public function testCreate()
    {
    	$this->visit('/')
    		->click('Contents')
    		->seePageIs('/content/view');
    }

    /**
     * [testStore description]
     * @return [type] [description]
     */
    public function testStore()
    {
    	$this->visit('/')
    		->click('Contents')
    		->check('content_id')
    		->select('wilson', 'user_id')
    		->press('Assign')
    		->see('success');
    }

    /**
     * [testShow description]
     * @return [type] [description]
     */
    public function testShow()
    {
    	$this->visit('/')
    		->click('Tasks')
    		->seePageIs('/content/tasks')
    		->click('title')
    		->see('Task name');
    }
}
