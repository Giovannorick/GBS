<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use App\Models\Publishers;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home()
    {
        $buku = Books::paginate(9);
        return view('homepage', ['book' => $buku]);
    }

    public function BookDetail($bookId)
    {
        $buku = Books::where('id', $bookId)->first();
        return view('bookDetail', ['book' => $buku]);
    }

    public function category($categoryId)
    {
        $kategori = Categories::where('id', $categoryId)->first();
        $buku = $kategori->books()->paginate(6);
        return view('category', ['book' => $buku, 'category' => $kategori]);
    }

    public function publisher()
    {
        $publisher = Publishers::all();
        return view('publisher', ['publisher' => $publisher]);
    }

    public function publisherDetail($publisherId)
    {
        $publisher = Publishers::where('id', $publisherId)->first();
        $buku = $publisher->books()->paginate(6);
        return view('publisherDetail', ['publisher' => $publisher, 'book' => $buku]);
    }

    public function contact()
    {
        return view('contact');
    }
}
