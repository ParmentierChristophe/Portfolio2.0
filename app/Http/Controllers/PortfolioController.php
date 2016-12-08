<?php

namespace App\Http\Controllers;

use App\Projet;
use Illuminate\Http\Request;
use App\Http\Controllers\View;

class PortfolioController extends Controller
{
    public function index()
    {
        $projet = Projet::all();
        return view('portfolio.index', compact('projet'));
    }

}
