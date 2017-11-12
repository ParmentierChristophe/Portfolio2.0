<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view( 'portfolio.about' );


	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public
	function store(
		ContactRequest $request
	) {
		Mail::to( 'itof2addictwear@gmail.com' )
		    ->send( new Contact( $request->except( '_token' ) ) );

		return view( 'portfolio.confirm' );


	}

}
