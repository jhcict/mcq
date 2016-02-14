<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * undocumented function
     *
     * @return void
     */
    public function getIndex()
    {
        return view('index');
    }

}
