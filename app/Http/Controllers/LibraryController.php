<?php

namespace App\Http\Controllers;


use App\Contracts\Entities\LibraryContract;
use App\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $libraries = Library::all();

        return view('library.index', compact('libraries'));
    }

    public function create()
    {
        $libraries = Library::all();

        return view('library.create', compact('libraries'));
    }

    public function store(Request $request)
    {
        Library::create(array_only($request->all(), LibraryContract::FIELD_LIST));

        return redirect()->route('library.index');
    }
}
