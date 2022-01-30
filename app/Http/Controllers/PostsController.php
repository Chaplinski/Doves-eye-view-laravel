<?php

namespace App\Http\Controllers;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.blog')
            ->with('data', $this->getAboutSiteMap('blog'))
            ->with('posts', $this->getAllPosts());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/blog')->with('message', 'Your post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.post')
            ->with('post', Post::query()->where('slug', $slug)->first())
            ->with('data', $this->getAboutSiteMap('blog/' . $slug));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
                'user_id' => auth()->user()->id,
            ]);

        return redirect('/blog')
            ->with('message', 'Your post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/blog')
            ->with('message', 'Your post has been deleted');
    }

    private function getAboutSiteMap(string $route) {
        return DB::table('site_map')->where('route', $route)->first();
    }

    private function getAllPosts(): LengthAwarePaginator {
        return Post::query()->paginate(4);
    }
}
