<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NotesController extends Controller
{
	public function getNotes()
	{
		return Note::paginate(5);

		
	}
    public function index()
    {
        return view('layouts.master');
    }
}
