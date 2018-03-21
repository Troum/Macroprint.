<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\News;
use App\Services;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{
    public function index()
    {
        $news = News::all();
        $services = Services::all();
        return view('pages.index', compact('services', 'news'));
    }

    public function about()
    {
        $team = Team::all();
        return view('pages.about', compact('team'));
    }

    public function works()
    {
        $services = Services::all();
        $gallery = Gallery::all();
        return view('pages.works', compact('services', 'gallery'));

    }

    public function gallery(Request $request)
    {
        $gallery = Gallery::whereCategory($request->slug)->get();
        return response()->json(['response' => $gallery]);
    }

    public function allGallery()
    {
        $gallery = Gallery::all();
        dd($gallery);
    }

    public function services()
    {
        $services = Services::all();
        return view('pages.services', compact('services'));
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

    public function team()
    {
        return view('pages.contacts');
    }

    public function route()
    {
        return view('pages.contacts');
    }

    public function clients()
    {
        return view('pages.contacts');
    }

    public function map()
    {
        return view('pages.contacts');
    }

    public function review()
    {
        return view('pages.contacts');
    }

    public function devices()
    {
        return view('pages.contacts');
    }

    public function news()
    {
        $news = News::all();
        return view('pages.news', compact('news'));
    }

    public function single($slug)
    {
        $new = News::whereSlug($slug)->firstOrFail();
        return view('pages.new', compact('new'));
    }

    public function service($slug)
    {
        $service = Services::whereSlug($slug)->firstOrFail();
        return view('pages.service', compact('service'));
    }
}
