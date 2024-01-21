<?php

namespace App\Http\Controllers;
use App\Portfolio;
use TCG\Voyager\Models\Category;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){

    $portfolio = portfolio::with('category')
    ->orderBy('created_at','desc')
    ->get();

    return view('portfolio.index')
        ->with("portfolio",$portfolio)
        ;
    }
    public function view($id) {
        $data = portfolio::where('id', $id)->first();

        $recentportfolio = portfolio::whereNotIn('id', [$data->id])
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('portfolio.view')
            ->with("data", $data)
            ->with('recentportfolio', $recentportfolio);
    }
}
