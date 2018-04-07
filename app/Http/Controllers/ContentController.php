<?php

namespace App\Http\Controllers;

use Auth;
use App\Content;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public $request;
    public $content;

    public function __construct(Request $request, Content $content)
    {
        // allow only authenticated users access to routes here
        $this->middleware('auth');

        $this->request = $request;
        $this->content = $content;
    }

    /**
     * Fetch all available contents and return them to the view
     *
     * @return Response
     */
    public function getFetchContents()
    {
        $contents = $this->content::all();

        return view('contents_list', ['contents' => $contents]);
    }

    /**
     * Returns a view that contains the content creation form
     *
     * @return Response
     */
    public function getCreateContent()
    {
        return view('content_new');
    }

    /**
     * Creates the content and stores it in the database
     *
     * @return Response
     */
    public function postCreateContent()
    {
        $userId = Auth::user()->id;
        $title = $this->request->input('title');
        $industry = $this->request->input('industry');
        $body = $this->request->input('body');
        $alert = "";

        if (empty($title) || empty($industry) || empty($body)) {
            $alert = 'Missing field. Please fill in all fields.';
        } else {
            $this->content->user_id = $userId;
            $this->content->title = $title;
            $this->content->industry = $industry;
            $this->content->body = $body;
            $this->content->save();
            $alert = 'Content successfully published.';
        }

        return view('content_new', ['alert' => $alert]);
    }
}
