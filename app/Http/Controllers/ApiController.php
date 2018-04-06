<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Content;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public $content;

    public function __construct(Content $content)
    {
        $this->content = $content;
    }

    /**
     * Fetch all contents for a user
     *
     * @return json
     */
    public function getFetchAll($user)
    {
        $contents = User::find(intval($user))->contents;

        if ($contents) {
            return response()->json([
                'error' => '',
                'contents' => $contents,
                'status_code' => 200
            ]);
        }

        return response()->json([
            'error' => '',
            'contents' => [],
            'status_code' => 404
        ]);
    }

    /**
     * Fetch all contents for a user
     *
     * @return json
     */
    public function getFetchSingle($id)
    {
        $content = $this->content::find($id);

        return response()->json([
            'error' => '',
            'contents' => $content,
            'status_code' => 200
        ]);
    }
}
