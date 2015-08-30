<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Admin Home Page.
     *
     * @return Response
     */
    public function getIndex()
    {
        return view('admin.index');
    }
}
