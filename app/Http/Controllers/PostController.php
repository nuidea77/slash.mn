<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use TCG\Voyager\Models\Category;

class PostController extends Controller
{
    public function index(){


        $newslist = Post::with('category')->where([
            ['status', '=','PUBLISHED']
        ])
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        $category = Category::orderBy('id', 'asc')->get();


        return view('blog.index')
        ->with("category",$category)
            ->with('newslist', $newslist)
        ;
    }

    public function category($id){
        $newslist = Post::with('category')->where([
            ['status', '=','PUBLISHED'],
            ['category_id', '=', $id]
        ])
            ->orderBy('created_at', 'desc')
            ->paginate(6);


            $category = Category::orderBy('id', 'asc')->get();


        return view('blog.index')
         ->with("category",$category)
            ->with('newslist', $newslist)
        ;
    }
	public function view($slug){

        $data = Post::with('category')->where('slug', $slug)->first();

        $recentnews = Post::whereNotIn('slug', [$data->slug])->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();



        return view('blog.view')
        	->with('data', $data)
            ->with('recentnews', $recentnews);
    }
}
