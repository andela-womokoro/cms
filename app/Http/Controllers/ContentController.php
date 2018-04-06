<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    /**
     * Display application's dashboard
     *
     * @return [type] [description]
     */
    public function getHome()
    {
        return view('dashboard');
    }

    /**
     * Fetch all available contents and return them to the view
     *
     * @return [type] [description]
     */
    public function getFetchContents()
    {
        return false;
    }

    /**
     * Returns a view that contains the content creation form
     *
     * @return [type] [description]
     */
    public function getCreateContent()
    {
        return false;
    }

    /**
     * Creates the content and stires it in the database
     *
     * @return [type] [description]
     */
    public function postCreateContent()
    {
        return false;
    }
}
