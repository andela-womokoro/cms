<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function __construct()
    {
        // allow only authenticated usesr access to routes here
        $this->middleware('auth');
    }

    /**
     * Fetch all available contents and return them to the view
     *
     * @return [type] [description]
     */
    public function getFetchContents()
    {
        return view('contents_list');
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
