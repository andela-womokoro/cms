<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     * Fetch all contents for a user
     *
     * @return json
     */
    public function getFetchAll()
    {
        // use eloquent to fetch all products as an array.
        // Return the result in json format using laravel's Response->json()

        //return response()->json();
        return false;
    }

    /**
     * Fetch all contents for a user
     *
     * @return json
     */
    public function getFetchSingle($id)
    {

        // use eloquent to fetch a single products as an array.
        // Return the result in json format using laravel's Response->json()

        //return response()->json();
        return false;
    }
}
