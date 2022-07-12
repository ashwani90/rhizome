<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use \Dymantic\InstagramFeed\Profile;
use Mail;
use App\Mail\ContactMail;

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
        $data = $this->getInstagramPosts(3);
        
        return view('site.index', ['projects' => $projects, 'instaData' => $data]);
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

    public function instaPosts()
    {
        $data = $this->getInstagramPosts(9);
        return view('site.instaPosts', ['instaData' => $data]);
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

    public function send_mail(Request $request)
    {
        $allParameters = $request->all();
        $name = $allParameters['name'];
        $subject = $allParameters['subject'];
        $content = $allParameters['message'];
        $email = $allParameters['email'];
        Mail::to('iashwanigaur@outlook.com')->send(new ContactMail($name, $subject, $email, $content));
        
         echo "Check your mail";
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

    private function getInstagramPosts($count) {
        try {
            $results = [];
            $profile = DB::table('dymantic_instagram_feed_tokens')->where(['id'=>'1'])->first();
            $userId = $profile->user_id;
            $accessToken = $profile->access_code;
            $mediaUrl = "https://graph.instagram.com/". $userId. "/media?access_token=".$accessToken."";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $mediaUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            $server_output = curl_exec($ch);
            curl_close ($ch);
    
            $medias = json_decode($server_output, 1);
            $i=1;
            
            foreach ($medias['data'] as $media) {
                if ($i==$count) {
                    break;
                }
                $customUrl = "https://graph.instagram.com/".$media['id']."?fields=id,caption,media_url,permalink,timestamp&access_token=".$accessToken."";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $customUrl);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
                $server_output = curl_exec($ch);
                curl_close ($ch);
                $customMedia = json_decode($server_output, 1);
                
                $result = [
                    'id'=>$customMedia['id'],
                    'caption'=>isset($customMedia['caption']) ? $customMedia['caption'] : "Instagram Post",
                    'media_url'=>$customMedia['media_url'],
                    'permalink'=>$customMedia['permalink'],
                    'timestamp'=>$customMedia['timestamp'],
                ];
                array_push($results, $result);
                $i++;
            }
            array_push($results, $result);
            
            return $results;
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            return false;
        }
        
    }
}
