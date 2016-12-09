<?php

namespace App\Http\Controllers;

use App\Projet;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Controllers\Controller;
use Image;
use App\Http\Requests;
use Session;
use File;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Auth::check())
        {
            $projet = Projet::all();
            return view('projets.index', compact('projet'));
        }
        else
        {
            return view('auth.login');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Auth::check())
        {
        return view('projets.create');
        }
        else
        {
            return view('auth.login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $requests)
    {
        if (\Auth::check())
        {
        $projet = new Projet;

        $projet->titre = $requests->titre;
        $projet->type = $requests->type;
        $projet->soustitre = $requests->soustitre;
        $projet->contenu = $requests->contenu;
        $projet->client = $requests->client;
        $projet->agence = $requests->agence;
        $projet->typecrea = $requests->typecrea;
        $projet->annee = $requests->annee;


        // Image de couverture
        if ($requests->hasFile('imgcouv'))
        {
            $imgcouv = $requests->file('imgcouv');
            $filename = time() . '.' . $imgcouv->getClientOriginalExtension() ;
            $location = public_path('uploads/imgcouv/' . $filename);
            Image::make($imgcouv)->save($location);

            $projet->imgcouv = $filename;

        }


        //img 1
        if ($requests->hasFile('imgone'))
        {
            $imgone = $requests->file('imgone');
            $filename = rand(000000, 999999) . '.' . $imgone->getClientOriginalExtension() ;
            $location = public_path('uploads/' . $filename);
            Image::make($imgone)->save($location);

            $projet->imgone = $filename;

        }


        //img 2
        if ($requests->hasFile('imgtwo'))
        {
            $imgtwo = $requests->file('imgtwo');
            $filename = rand(000000, 999999) . '.' . $imgtwo->getClientOriginalExtension() ;
            $location = public_path('uploads/' . $filename);
            Image::make($imgtwo)->save($location);

            $projet->imgtwo = $filename;

        }
        //img3
        if ($requests->hasFile('imgthree'))
        {
            $imgthree = $requests->file('imgthree');
            $filename = rand(000000, 999999) . '.' . $imgthree->getClientOriginalExtension() ;
            $location = public_path('uploads/' . $filename);
            Image::make($imgthree)->save($location);

            $projet->imgthree = $filename;

        }
        //img4
        if ($requests->hasFile('imgfour'))
        {
            $imgfour = $requests->file('imgfour');
            $filename = rand(000000, 999999) . '.' . $imgfour->getClientOriginalExtension() ;
            $location = public_path('uploads/' . $filename);
            Image::make($imgfour)->save($location);

            $projet->imgfour = $filename;

        }

        $projet->save();
        Session::flash('success', 'Ton projet à été ajouté !');

        if ($projet) {
            return view('projets.create');

        }
        }
        else
        {
            return view('auth.login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $projet = Projet::findOrFail($id);
        // this my route
        return view('portfolio.projet')->with('projet',$projet);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        if (\Auth::check())
        {
        return view('projets.edit',compact('projet') );
        }
        else
        {
            return view('auth.login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projet $projet)
    {
        if (\Auth::check())
        {
        $projet->update($request->all());
        return redirect()->route('projets.index');
        }
        else
        {
            return view('auth.login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        if (\Auth::check())
        {

                $projet->delete();
                return redirect()->route('projets.index');




        }
        else
        {
            return view('auth.login');
        }
    }
}
