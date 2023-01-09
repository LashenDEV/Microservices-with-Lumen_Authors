<?php

namespace App\Http\Controllers;



use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return the list of authors
     * @return Illuminate\Http\Response
     */
    public function index(){

    }

    /**
     * Create one new author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){

    }

    /**
     * Obtain and show one author
     * @return Illuminate\Http\Response
     */
    public function show($author){

    }

    /**
     * Update an existing author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author){

    }

    /**
     * Remove an existing author
     * @return Illuminate\Http\Response
     */
    public function destroy($author){

    }
}
