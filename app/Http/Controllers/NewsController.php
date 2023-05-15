<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

class NewsController extends Controller
{


    public function index()
    {
        $news = News::orderBy('date','desc')->get();
        return Inertia::render("Auth/News/Index",[
            'news'  => NewsResource::collection($news)
        ]);
    }

    public function create()
    {
        return Inertia::render("Auth/News/Create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "title"       =>  ['required'],
            "date"        =>  ['required'],
            "body"        =>  ['required'],
            "photo"       =>  ['required'],
        ]);

        $news=News::create([
            "photo"       => $request->photo,
            "title"       => $request->title,
            "slug"        => Str::slug($request->title).date("-Y-m-d"),
            "date"        => $request->date,
            "body"        => $request->body,
            "user_id"     => Auth::id()
        ]);

        return Redirect::route("admin.news.show",$news->slug)->with("success","News created");

    }

    public function show($slug)
    {
        $news=News::where('slug',$slug)->first();
        if (is_object($news)){
            return Inertia::render('Auth/News/Show',[
                'news'  =>  new NewsResource($news)
            ]);
        }else{
            return back()->with('status','News Article not found');
        }
    }

    public function edit($slug)
    {
        $news=News::where('slug',$slug)->first();
        if (is_object($news)){
            return Inertia::render('Auth/News/Edit',[
                'news'  =>  new NewsResource($news)
            ]);
        }else{
            return back()->with('status','News Article not found');
        }
    }

    public function update(Request $request,$slug)
    {
        $news=News::where('slug',$slug)->first();
        if (is_object($news)){
            $request->validate([
                "title"       =>  ['required'],
                "date"        =>  ['required'],
                "body"        =>  ['required'],
                "photo"       =>  ['required'],
            ]);

            $news->update([
                "photo"       => $request->photo,
                "title"       => $request->title,
                "slug"        => Str::slug($request->title).date("-Y-m-d"),
                "date"        => $request->date,
                "body"        => $request->body,
                "user_id"     => Auth::id()
            ]);

            return Redirect::route("admin.news.show",$news->slug)->with("success","News updated");

        }else{
            return back()->with('status','News Article not found');
        }
    }

    public function delete($slug)
    {
        $news=News::where('slug',$slug)->first();
        if (is_object($news)){
            //delete avatar
            if(file_exists($news->photo)){
                Storage::disk("public_uploads")->delete($news->photo);
            }
            $news->delete();
            return Redirect::route("admin.news.index")->with("success","News article delete");

        }else{
            return back()->with('status','News Article not found');
        }
    }
}
