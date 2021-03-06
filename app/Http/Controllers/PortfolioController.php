<?php

namespace App\Http\Controllers;

use App\Projet;
use Illuminate\Http\Request;
use App\Http\Controllers\View;
use Sluggable;

class PortfolioController extends Controller
{
    public function index()
    {
        $projet = Projet::all();
        return view('portfolio.index', compact('projet'));
    }

    public function work()
    {
        $projet = Projet::all();
        return view('portfolio.work', compact('projet'));
    }

}
