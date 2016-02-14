<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Admin Home Page
     *
     * @return Response
     */
    public function getIndex()
    {
        return view('admin.index');
    }

}
