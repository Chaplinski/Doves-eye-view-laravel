<?php

namespace App\Http\Controllers;

use App\Actions\SubmitContactUsForm;
use App\Models\ClientPage;
use App\Models\Post;
use Carbon\Carbon;
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

    public function thankYouPost(Request $request)
    {
        SubmitContactUsForm::make()->handle($request->all());

        return view('layouts.thankyou')->with('data', $this->getAboutSiteMap('contact'));
    }

    public function thankYouGet(Request $request)
    {
        return view('layouts.thankyou')->with('data', $this->getAboutSiteMap('contact'));
    }

    public function service()
    {
        return view('layouts.service')->with('data', $this->getAboutSiteMap('service'));
    }

    public function highlights()
    {
        return view('layouts.highlights')->with('data', $this->getAboutSiteMap('highlights'));
    }

    public function blog()
    {
        $posts = Post::query()->paginate(4);

        return view('blog.blog')
            ->with('data', $this->getAboutSiteMap('blog'))
            ->with('posts', $posts);
    }

    /**
     * @param $url
     * @var ClientPage $data
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function client($url) {
        $data = $this->getClientPageData($url);
        if ($data === null) {
            header('Location: /');
            die();
        }
        $dateAndTimes = $this->getDateandTime($data->event_start_time);
        return view('layouts.client')
            ->with('data', $data)
            ->with('stream_start', $dateAndTimes['stream_start'])
            ->with('event_start', $dateAndTimes['event_start'])
            ->with('date', $dateAndTimes['date']);
    }

    private function getAboutSiteMap(string $route) {
        return DB::table('site_map')->where('route', $route)->first();
    }

    private function getClientPageData(string $url) {
        return DB::table('client_pages')->where('url', $url)->first();
    }

    private function getDateandTime(string $eventStartTime) {
        $date = new Carbon($eventStartTime);
        return [
            'date' => $date->monthName . ' ' . $date->day . ', ' . $date->year,
            'event_start' => $date->format('g:i A'),
            'stream_start' => $date->subMinutes(15)->format('g:i A')
        ];
    }
}
