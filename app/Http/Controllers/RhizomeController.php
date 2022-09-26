<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use DB;
use \Dymantic\InstagramFeed\Profile;
use Mail;
use App\Mail\ContactMail;
use InstagramScraper\Instagram;
use Phpfastcache\Helper\Psr16Adapter;

class RhizomeController extends Controller
{

    public $dynamic_classes = [
        '1' => "col-lg-12 col-md-12 ",
        '2' => "col-lg-8 col-md-8 col-sm-12",
        '3' => "col-lg-4 col-md-4 col-sm-12",
        '4' => "col-lg-8 col-md-8 col-sm-12",
        '5' => "col-lg-4 col-md-4 col-sm-12"
    ];

    public $dynamic_heights = [
        '1' => "full-height",
        '2' => "full-height",
        '3' => "full-height",
        '4' => "half-height",
        '5' => "half-height",
    ];

    /**
     * Show the landing page of the website
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = DB::table('projects')->whereIn('id', array(1, 2, 3,4,5,6,7,8,10,11,12,14,28,29))->where('id', '<>', 61)->orderBy('priority', 'desc')->get();
        $persons = DB::table('team')->where('priority', '>', 0)->orderBy('priority', 'desc')->get();
        $blogs = DB::table('blogs')->orderBy('id')->limit(3)->get();
        $people = DB::table('team')->where('priority', '>', 0)->orderBy('priority', 'desc')->skip(4)->take(100)->get();

        $data = DB::table("insta_posts")->limit(4)->get();
        $da=[];
        foreach ($data as $d) {
          $da[] = array("media_url" => $d->media_url, "caption" => $d->caption, "permalink" => $d->permalink, "timestamp" => $d->timestamp);
        }
        $i=0;
        foreach ($projects as $project) {
            $project->class = $this->dynamic_classes[$project->image_dim];
            $project->height = $this->dynamic_heights[$project->image_dim];
            if ($project->next_horizontal) {
                $projects[$i]->nextPro = $projects[$i+1];
                $projects[$i+1]->not_show = true;
            }else {
                $projects[$i]->nextPro = null;
            }
            $i++;
        }
        
        return view('site.index', ['projects' => $projects, "persons" => $persons, "blogs" => $blogs, 'people' => $people, "instaData" => $da]);
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
        $i=0;
        foreach ($projects as $project) {
            $project->class = $this->dynamic_classes[$project->image_dim];
            $project->height = $this->dynamic_heights[$project->image_dim];
            $i++;
        }

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

    public function blog(Request $request)
    {
        $allParameters = $request->all();
        $id = $allParameters['id'];
        $blog = DB::table('blogs')->find($id);
        $desc = $blog->desc;
        $firstChar = $desc[0];
        $desc = substr($desc,1,-1);
        $output = '<span class="alt-font first-letter first-letter-big text-fast-blue">' . $firstChar . '</span>' . $desc;
        $tags = $blog->tags;
        $tags = explode(",", $tags);
        $tag = $tags[0];
        $relatedPosts = DB::table('blogs')->where("tags", "like", "%" . $tag . "%")->limit(3)->get();
        $categories  = DB::select("Select count(id) as dataCount,category from blogs group by category");
        $allTags  = DB::select("Select group_concat(tags) as allTags from blogs group by category");
        $tagStr = "Rhizome";
        foreach ($allTags as $tag) {
            $tagStr .= "," . $tag->allTags;
        }
        $allTags = array_unique(explode(",", $tagStr));

        return view('site.blog-post', ['blog' => $blog, 'tags' => $tags, "relatedPosts" => $relatedPosts, 'output' => $output, 'categories' => $categories, 'allTags' => $allTags]);
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

    public function instaPosts(Request $request)
    {
        $blogs = DB::table('blogs')->orderBy('id')->get();
        $allParameters = $request->all();
        if (isset($allParameters['tag'])) {
            $tag = $allParameters['tag'];
            $blogs = DB::table('blogs')->where("tags", "like", "%" . $tag . "%")->get();
        }
        if (isset($allParameters['category']) && $allParameters['category'] != "Rhizome") {
            $category = $allParameters['category'];
            $blogs = DB::table('blogs')->where("category", $category)->get();
        }
        $data = DB::table("insta_posts")->get();
        $da=[];
        foreach ($data as $d) {
          $da[] = array("media_url" => $d->media_url, "caption" => $d->caption, "permalink" => $d->permalink, "timestamp" => $d->timestamp);
        }
        return view('site.instaPosts', ['blogs' => $blogs, "instaData" => $da]);
    }

    public function save_insta()
    {
        $data = $this->getInstagramPosts(10);
        foreach ($data as $d) {
            $media_url = $d['media_url'];
        $caption = $d['caption'];
        $permalink = $d['permalink'];
        $timestamp = $d['timestamp'];
        $data=array('media_url'=>$media_url,"caption"=>$caption, "permalink" => $permalink, "timestamp"=>strtotime($timestamp));
        DB::table('insta_posts')->insert($data);
        }

    }

    /**
     * Show the projects page of the website
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function about()
    {
        $persons = DB::table('team')->where('priority', '>', 0)->orderBy('priority', 'desc')->limit(4)->get();
        $people = DB::table('team')->where('priority', '>', 0)->orderBy('priority', 'desc')->skip(4)->take(100)->get();
        return view('site.about', ['persons' => $persons, "people" => $people]);
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
        $contact = new Contact();
        $contact->name = $allParameters['name'];
        $contact->message = $allParameters['message'];
        $contact->email = $allParameters['email'];
        $contact->phone = $allParameters['phone'];
        $contact->save();
        

        // $allParameters = $request->all();
        // $name = $allParameters['name'];
        // $subject = "User Contact";
        // $content = $allParameters['message'];
        // $content = $allParameters['email'] . " " . $allParameters['phone'] . " " . $content;
        // $email = "ar.tushar@gmail.com";
        // Mail::to('iashwanigaur@outlook.com')->send(new ContactMail($name, $subject, $email, $content));
        //return response()->json(['status' => true]);
    }

    public function project(Request $request)
    {
        $projects = DB::table('projects')->where('priority', '>', 0)->where('id', '<>', 61)->orderBy('priority', 'desc')->limit(3)->get();
        $allProjectTypes = [
            'industrial'=> 'Industrial',
            'institutional' => 'Institutional',
            'house' => 'House',
            'residential' => 'Residential',
            'hotels' => 'Hotels & Resorts',
            'mixuse' => 'Mixuse',
            'interior' => 'Interior',
            'others' => 'Others',
            'masterplanning'=>'Master Planning',
            'architecture' => 'Architecture',
            "urban" => 'Urban Design'
        ];
        
        $allParameters = $request->all();
        $id = $allParameters['id'];
        $project = DB::table('projects')->find($id);
        $projectType = explode(" ", $project->type);
        $projectImages = DB::table('project_images')->where(['project_id'=>$id, 'enabled'=>1])->orderBy('priority')->get();
        $similar_projects = DB::table('projects')->where('priority', '>', 0)->where('id', '<>', $id)->where('type', 'like', '%' . $projectType[0] . '%')->orderBy('priority', 'desc')->limit(3)->get();
        return view('site.project', ['project' => $project, 'images' => $projectImages, 'projects' => $similar_projects]);
    }

    private function getInstagramPosts($count) {
        try {
            $results = [];
            $profile = DB::table('dymantic_instagram_feed_tokens')->where(['id'=>'2'])->first();
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
            
            return $results;
        } catch (\Exception $e) {
            return false;
        }
        
    }
}
