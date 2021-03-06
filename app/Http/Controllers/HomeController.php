<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $child_books=Book::where('category_id',3)
            ->orWhere('category_id',8)
            ->limit(20)->get();

        $novel_books=Book::where('category_id',5)
            ->orWhere('category_id',10)
            ->limit(20)->get();

        $psychology_books=Book::where('category_id',6)
            ->orWhere('category_id',11)
            ->paginate(6);

        $poetry_books=Book::where('category_id',4)
            ->orWhere('category_id',9)
            ->limit(20)->get();

        $scientific_books=Book::where('category_id',12)
            ->limit(20)->get();

        $upload='http://localhost';

//        return response()->json($child_books);

        return view('layouts.app2',compact('child_books','novel_books','psychology_books','poetry_books','scientific_books','upload'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        $upload='http://localhost';

        return view('layouts.detail',compact('book','upload'));
//        return view('t',compact('book','upload'));
    }
}
