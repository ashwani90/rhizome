<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

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
        $projects = DB::table('projects')->where('priority', '>', 0)->where('id', '<>', 61)->orderBy('priority', 'desc')->limit(12)->get();
        return view('site.index', ['projects' => $projects]);
    }

    /**
     * Show the projects page of the website
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function projects()
    {
        $projects = DB::table('projects')->where('priority', '>', 0)->orderBy('priority', 'desc')->get();
        return view('site.projects', ['projects' => $projects]);
    }

    public function textPro()
    {
        $allProjectTypes = [
            'industrial'=> 'Industrial',
            'institutional' => 'Institutional',
            'house' => 'House',
            'residential' => 'Residential',
            'hotels' => 'Hotels & Resorts',
            'mixuse' => 'Mixuse',
            'interior' => 'Interior',
            'others' => 'Others',
            'masterplanning'=>'Master Planning'
        ];
        $projects = DB::table('projects')->where('priority', '>', 0)->orderBy('priority', 'desc')->get();
        for ($i=0;$i<count($projects); $i++) {
            $projects[$i]->type = $allProjectTypes[$projects[$i]->type];
        }
        return view('site.text_projects', ['projects' => $projects]);
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
        $persons = DB::table('team')->where('priority', '>', 0)->orderBy('priority', 'desc')->get();
        return view('site.team', ['persons' => $persons]);
    }

    public function project(Request $request)
    {
        $allProjectTypes = [
            'industrial'=> 'Industrial',
            'institutional' => 'Institutional',
            'house' => 'House',
            'residential' => 'Residential',
            'hotels' => 'Hotels & Resorts',
            'mixuse' => 'Mixuse',
            'interior' => 'Interior',
            'others' => 'Others',
            'masterplanning'=>'Master Planning'
        ];
        $allParameters = $request->all();
        $id = $allParameters['id'];
        $project = DB::table('projects')->find($id);
        $project->type = $allProjectTypes[$project->type];
        $projectImages = DB::table('project_images')->where(['project_id'=>$id, 'enabled'=>1])->orderBy('priority')->get();
        return view('site.project', ['project' => $project, 'images' => $projectImages]);
    }
}
