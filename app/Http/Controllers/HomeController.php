<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Comment;
use \App\Post;
use \App\Reaction;
use \App\City;
use \App\Page;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $city = City::orderby('name','ASC')->get();

        $comment = Comment::count();
        $page = Post::where('post_root_type',1)->count();
        $group = Post::where('post_root_type',2)->count();
        $reaction = Reaction::count();
        $date = \Carbon\Carbon::today()->subDays(29);

        $status = Post::where('post_type','type')->count();
        $video = Post::where('post_type','video')->count();
        $link = Post::where('post_type','link')->count();
        $photo = Post::where('post_type','photo')->count();


        $like = Reaction::where('reac_type','Like')->count();
        $love = Reaction::where('reac_type','Love')->count();
        $care = Reaction::where('reac_type','Care')->count();
        $haha = Reaction::where('reac_type','Haha')->count();
        $wow = Reaction::where('reac_type','Wow')->count();
        $sad = Reaction::where('reac_type','Sad')->count();
        $angry = Reaction::where('reac_type','Angry')->count();

        $top = Post::orderby('post_reactions','DESC')->orderby('post_comments','DESC')->orderby('post_shares','DESC')->where('post_inserted_date','>',$date)->LIMIT(10)->get();

        $item = 'Архангай';
        if($request->has('country')){
            $item = $request->country;
        }

        $country = Post::country($item)->where('post_inserted_date','>',$date)->orderby('post_reactions','DESC')->orderby('post_comments','DESC')->orderby('post_shares','DESC')->LIMIT(10)->get();



        $posts = Post::select(DB::raw('DATE(post_inserted_date) as date'), DB::raw('count(*) as total'))
          ->groupBy('date')->where('post_inserted_date','>',$date)
          ->get();



        return view('home',[
            'city' => $city,
            'comment' => $comment,
            'page' => $page,
            'group' => $group,
            'reaction' => $reaction,
            'posts' => $posts,

            'status' => $status,
            'video' => $video,
            'link' => $link,
            'photo' => $photo,

            'like' => $like,
            'love' => $love,
            'care' => $care,
            'haha' => $haha,
            'wow' => $wow,
            'sad' => $sad,
            'angry' => $angry,

            'top' => $top,
            'country' => $country,
            'item' => $item,
        ]); 
    }

    public function page($id){
        $model = Page::where('page_id',$id)->firstOrFail();
        $post = Post::where('post_root_id',$id)->orderby('post_reactions','DESC')->orderby('post_shares','DESC')->limit(10)->get();

        $posts = Post::where('post_root_id',$id)->count();
        $shares = Post::where('post_root_id',$id)->sum('post_shares');
        $comment = Post::where('post_root_id',$id)->sum('post_comments');
        $reaction = Post::where('post_root_id',$id)->sum('post_reactions');


        return view('page',[
            'model' => $model,
            'post' => $post,
            'posts' => $posts,
            'shares' => $shares,
            'comment' => $comment,
            'reaction' => $reaction
        ]);
    }

    public function post($id){
        $model = Post::where('post_id',$id)->firstOrFail();
        return view('post',[
            'model' => $model,
        ]);
    }
}
