<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use App\Partner;
use App\Portfolio;
use App\Service;
use App\Testimonial;
use App\Models\Post;

class MainController extends Controller
{
public function index(){

$service = Service::with('category')->orderBy('order', 'asc')
    ->limit(8)
    ->get();

$post = Post::with('category')->where('featured', '=',1)
    ->orderBy('created_at','desc')
    ->limit(3)
    ->get();

$portfolio = portfolio::with('category')->where('featured', '=',1)
    ->orderBy('created_at','desc')
    ->limit(6)
    ->get();

$testimonial = Testimonial::orderBy('created_at','desc')
    ->limit(6)
    ->get();

$partner = partner::orderBy('order', 'desc')
    ->limit(8)
    ->get();

    return view('welcome')
    ->with('service', $service)
    ->with('portfolio', $portfolio)
    ->with('testimonial', $testimonial)
    ->with('partner', $partner)
    ->with('post', $post);
}
}
