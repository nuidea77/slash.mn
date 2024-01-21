<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use TCG\Voyager\Models\Category;

class ServiceController extends Controller
{
    public function index(){

        $service = Service::orderBy('order', 'desc')
        ->limit(4)
        ->get();

        return view('service.index')
        ->with("service",$service)
        ;
    }

    public function view($slug) {
        $data = Service::where('slug', $slug)->first();

        $recentservice = Service::whereNotIn('slug', [$data->slug])
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('service.view')
            ->with("data", $data)
            ->with('recentservice', $recentservice);
    }

}
