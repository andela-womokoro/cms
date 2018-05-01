<?php

namespace App\Http\Controllers;

use App\Task;
use App\Content;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public $task;

    public function __construct(Task $task)
    {
        // allow only authenticated users access to routes here
        $this->middleware('auth');

        $this->task = $task;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tasks_list');
    }

    /**
     * Show the view for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents_list', ['contents' => Content::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = $request->input('user_id');
        $contentId = $request->input('content_id');
        $alert = "";

        if (empty($userId) || empty($contentId)) {
            $alert = 'User or content(s) not selected. Please try again.';
        } else {
            $this->task->user_id = $userId;
            $this->task->content_id = $contentId;
            $this->task->save();
            $alert = 'success';
        }

        return view('contents_list', ['contents' => Content::all(), 'alert' => $alert]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // display a single task
    }
}
