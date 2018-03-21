<?php

namespace App\Http\Controllers;

use App\AllPhotos;
use App\Gallery;
use App\News;
use App\Services;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all();
        return view('home', compact('services'));
    }

    public function publish(Request $request)
    {
        if (Input::hasFile('cover'))
        {
            Input::file('cover')->move('img/news/', Input::file('cover')->getClientOriginalName());
            News::create([
                'title' => $request->title,
                'cover' => Input::file('cover')->getClientOriginalName(),
                'new' => $request->new
            ]);
            return back();
        } else {
            return back(404);
        }
    }

    public function teammate(Request $request)
    {
        if (Input::hasFile('avatar'))
        {
            Input::file('avatar')->move('img/team/', Input::file('avatar')->getClientOriginalName());
            Team::create([
                'name' => $request->name,
                'photo' => Input::file('avatar')->getClientOriginalName(),
                'position' => $request->position,
                'description' => $request->teammateDescription
            ]);
            return back();
        } else {
            abort(404);
        }
    }

    public function upload(Request $request)
    {
        if (Input::hasFile('gallery'))
        {
            foreach (Input::file('gallery') as $photo)
            {
                $photo->move('img/gallery/'.$request->category.'/', $photo->getClientOriginalName());
                Gallery::create([
                    'category' => $request->category,
                    'photo' => $photo->getClientOriginalName()
                ]);
            }
            return back();
        } else {
            abort(404);
        }
    }

    public function service(Request $request)
    {
        if (Input::hasFile('serviceCover') && Input::hasFile('servicePreview'))
        {
            Services::create([
                'name' => $request->service,
                'cover' => Input::file('serviceCover')->getClientOriginalName(),
                'preview' => Input::file('servicePreview')->getClientOriginalName(),
                'short' => $request->shortServiceDescription,
                'description' => $request->serviceDescription,
                'style' => $request->style
            ]);
            $service = Services::whereName($request->service)->first();
            Input::file('serviceCover')->move('img/service/'.$service->slug.'/main/', Input::file('serviceCover')->getClientOriginalName());
            Input::file('servicePreview')->move('img/service/'.$service->slug.'/preview/', Input::file('servicePreview')->getClientOriginalName());
            return back();
        } else {
            abort(404);
        }
    }
}
