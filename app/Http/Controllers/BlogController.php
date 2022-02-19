<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SiteMap;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    public function futureOfWeddings()
    {
        return view('blog.v1.futureofweddings')->with('data', $this->getAboutSiteMap('blog/futureofweddings'));
    }

    public function sendingInvites()
    {
        return view('blog.v1.sendinginvites')->with('data', $this->getAboutSiteMap('blog/sendinginvites'));
    }

    public function whoToInvite()
    {
        return view('blog.v1.whotoinvite')->with('data', $this->getAboutSiteMap('blog/whotoinvite'));
    }

    public function sevenReasons()
    {
        return view('blog.v1.sevenreasons')->with('data', $this->getAboutSiteMap('blog/sevenreasons'));
    }

    public function usAndThem()
    {
        return view('blog.v1.usandthem')->with('data', $this->getAboutSiteMap('blog/usandthem'));
    }

    private function getAboutSiteMap(string $route) {
        return DB::table('site_map')->where('route', $route)->first();
    }
}
