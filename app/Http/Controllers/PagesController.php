<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Category;
use App\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //Get all posts and pass it to the view
        $posts = Post::with('category')
                        ->orderBy('created_at', 'desc')
                        ->limit(3)
                        ->get();

        foreach ($posts as $post) {
            # code...
           $user = User::findOrFail($post->user_id);

           $post->author_image = $user->profile_picture;

           $post->author = $user->name;

           //$post->author = $user->name.' '.$user->firstname;
        }

        return view('pages.index')->with('posts', $posts);
    }

    public function getCountries(Request $request)
    {
        $contries = Country::where('region_id', $request->id)
                            ->get();
        return response()->json($contries);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function blog()
    {
        $categories = Category::all();

        $latestposts = Post::orderBy('created_at', 'desc')
                            ->limit(3)
                            ->get();

        $posts = Post::with('category')
                         ->orderBy('created_at', 'desc')
                         ->paginate(2);

        foreach ($posts as $post) {
            # code...
           $user = User::findOrFail($post->user_id);

           $post->author_image = $user->profile_picture;

           $post->author = $user->name;

           //$post->author = $user->name.' '.$user->firstname;
        }


        return view('pages.blog',compact('posts', 'categories', 'latestposts'));
    }

    public function postDetails($slug){

        $categories = Category::all();

        $latestposts = Post::orderBy('created_at', 'desc')
                            ->limit(3)
                            ->get();

        $post = Post::with('category')->where('slug',$slug)->first();

        $user = User::findOrFail($post->user_id);

        $post->author_image = $user->profile_picture;

        $post->author = $user->name;

        return view('pages.blog_single',compact('post', 'categories', 'latestposts'));
    }

    /*public function posts(){
        $data = Post::with('category')->paginate(20);

        return view('site.posts',compact('data'));
    }*/

   public function categoryPosts($slug){

        $categories = Category::all();

        $latestposts = Post::orderBy('created_at', 'desc')
                            ->limit(3)
                            ->get();

        $data = Category::with('posts')->where('slug',$slug)->first();

        foreach ($data->posts as $post) {
            # code...
           $user = User::findOrFail($post->user_id);

           $post->author_image = $user->profile_picture;

           $post->author = $user->name;

           //$post->author = $user->name.' '.$user->firstname;
        }

        return view('pages.category_posts',compact('data', 'categories', 'latestposts'));
    }

    public function publication()
    {
        return view('pages.publication');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
