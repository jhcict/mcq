<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * undocumented function.
     *
     * @return void
     */
    public function getIndex()
    {
        return view('index');
    }
}
