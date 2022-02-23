<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SiteMap;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{

    public function home()
    {
        return view('layouts.index')->with('data', $this->getAboutSiteMap('home'));
    }

    public function about()
    {
        return view('layouts.about')->with('data', $this->getAboutSiteMap('about'));
    }

    public function faq()
    {
        return view('layouts.faq')->with('data', $this->getAboutSiteMap('faq'));
    }

    public function contact()
    {
        return view('layouts.contact')->with('data', $this->getAboutSiteMap('contact'));
    }

    public function thankYou(Request $request)
    {
        return view('layouts.thankyou')->with('data', $this->getAboutSiteMap('contact'));
    }

    public function service()
    {
        return view('layouts.service')->with('data', $this->getAboutSiteMap('service'));
    }

    public function sample()
    {
        return view('layouts.sample')->with('data', $this->getAboutSiteMap('home'));
    }

    public function blog()
    {
        return view('blog.blog')->with('data', $this->getAboutSiteMap('blog'));
    }

    private function getAboutSiteMap(string $route) {
        return DB::table('site_map')->where('route', $route)->first();
    }
}
