<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;
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
         return view('content_new');
    }

    /**
     * Creates the content and stores it in the database
     *
     * @return [type] [description]
     */
    public function postCreateContent(Request $request)
    {
        $title = $request->input('title');
        $industry = $request->input('industry');
        $body = $request->input('body');
        $alert = "";

        if (empty($title) || empty($industry) || empty($body)) {
            $alert = 'Missing field. Please fill in all fields.';
        } else {
            $content = new Content();
            $content->title = $title;
            $content->industry = $industry;
            $content->body = $body;
            $content->save();
            $alert = 'Content successfully published.';
        }

        return view('content_new', ['alert' => $alert]);
    }
}
