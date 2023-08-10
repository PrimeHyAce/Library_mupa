<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
     
    public function index()
    {
        return view('books.index');
    }
}
