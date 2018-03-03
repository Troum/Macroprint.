<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function works()
    {
        return view('pages.works');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function price()
    {
        return view('pages.price');
    }

    public function delivery()
    {
        return view('pages.delivery');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function single($slug) {
        $new = News::whereSlug($slug)->firstOrFail();
        return view('pages.new', compact('new'));
    }

}
