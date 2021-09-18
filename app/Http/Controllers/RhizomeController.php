<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RhizomeController extends Controller
{
    /**
     * Show the landing page of the website
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('site.index');
    }

    /**
     * Show the projects page of the website
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function projects()
    {
        return view('site.projects');
    }

    /**
     * Show the projects page of the website
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function research()
    {
        return view('site.research');
    }

    /**
     * Show the projects page of the website
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('site.about');
    }

    /**
     * Show the projects page of the website
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('site.contact');
    }

    public function team()
    {
        return view('site.team');
    }

    public function project(Request $request)
    {
        $allParameters = $request->all();
        $id = $allParameters['id'];
        return view('site.project');
    }
}
