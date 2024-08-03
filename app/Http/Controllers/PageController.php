<?php

namespace App\Http\Controllers;

use App\Http\Resources\DownloadResource;
use App\Http\Resources\FoodResource;
use App\Http\Resources\FoodTypeResource;
use App\Http\Resources\GroupResource;
use App\Http\Resources\NewsResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\RecipeResource;
use App\Mail\ContactUsMail;
use App\Models\Download;
use App\Models\Food;
use App\Models\FoodType;
use App\Models\Group;
use App\Models\News;
use App\Models\Page;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PageController extends Controller
{
    public function home()
    {
        $group = Group::inRandomOrder()->first();
        $page = Page::where('name', 'home')->first();
        $news = News::orderBy('date')->limit(2)->get();
        return Inertia::render('Home', [
            'page'  => new PageResource($page),
            'news'  => NewsResource::collection($news),
            'group' => $group
        ]);
    }

    public function compositionTable()
    {
        $groups = Group::all();
        $foods = Food::orderBy('group_id', 'asc')->get();
        $page = Page::where('name', 'composition_table')->first();
        return Inertia::render('CompositionTable', [
            'groups'    => GroupResource::collection($groups),
            'foods'    => FoodResource::collection($foods),
            'page' => new PageResource($page)

        ]);
    }

    public function recipeCalculator()
    {
        $groups = Group::all();
        $foods = Food::orderBy('group_id', 'asc')->get();
        $foodTypes = FoodType::orderBy('item', 'asc')->get();

        return Inertia::render('RecipeCalculator', [
            'groups'        => GroupResource::collection($groups),
            'foods'         => FoodResource::collection($foods),
            'foodTypes'     => FoodTypeResource::collection($foodTypes),
        ]);
    }

    public function recipes(Request  $request)
    {
        $user = (new AppController())->getAuthUser($request);

        return Inertia::render('Recipes', [
            'recipes'        => RecipeResource::collection($user->recipes),
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->query('query');

        if ($query !== null) {
            $foods = Food::where('code', 'like', '%' . $query . '%')
                ->orWhere('ref_no', 'like', '%' . $query . '%')
                ->orWhere('item', 'like', '%' . $query . '%')
                ->orWhere('translation', 'like', '%' . $query . '%')
                ->get();
        } else {
            //            $query = 'all';
            $foods = Food::orderBy('code', 'asc')->get();
        }
        $groups = Group::all();

        return Inertia::render('Search', [
            'groups'    => GroupResource::collection($groups),
            'foods'     => FoodResource::collection($foods),
            'query'     => ucfirst($query)
        ]);
    }

    public function projectOverview()
    {
        $page = Page::where('name', 'project_overview')->first();
        return Inertia::render("ProjectOverview", [
            'page' => new PageResource($page)
        ]);
    }

    public function faqs()
    {
        $page = Page::where('name', 'faqs')->first();
        return Inertia::render("FAQS", [
            'page' => new PageResource($page)
        ]);
    }

    public function contactUs()
    {
        $page = Page::where('name', 'contacts')->first();
        return Inertia::render("ContactUs", [
            'page' => new PageResource($page)
        ]);
    }

    public function sendContactUsForm(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email'  => 'required',
            'message'  => 'required'
        ]);

        Mail::to("kunozgamlowoka@gmail.com")->send(new ContactUsMail($request->name, $request->email, $request->message));

        Redirect::back()->with("success", "Message sent!");
    }

    public function news()
    {
        $news = News::orderBy('date')->paginate((new AppController())->paginate);
        return Inertia::render("News", [
            'news'          => NewsResource::collection($news),
        ]);
    }

    public function newsArticle($slug)
    {
        $news = News::where('slug', $slug)->first();
        if (is_object($news)) {

            $popular_news = News::orderBy('date')->limit(3)->get();
            return Inertia::render('NewsDetails', [
                'popular_news'  => NewsResource::collection($popular_news),
                'news'  =>  new NewsResource($news)
            ]);
        } else {
            return back()->with('status', 'News Article not found');
        }
    }

    public function partners()
    {
        $page = Page::where('name', 'partners')->first();
        return Inertia::render("Partners", [
            'page' => new PageResource($page)
        ]);
    }

    public function downloads()
    {
        $page = Page::where('name', 'downloads')->first();
        $downloads = Download::orderBy('name', 'asc')->get();
        return Inertia::render("Downloads", [
            'page'      => new PageResource($page),
            'downloads' => DownloadResource::collection($downloads),

        ]);
    }

    /* Admin Routes */
    public function dashboard()
    {
        $users = User::count();
        $recipes = Recipe::count();
        $news = News::count();
        $foods = Food::count();
        return Inertia::render("Auth/Dashboard", [
            'users'     => $users,
            'recipes'   => $recipes,
            'news'      => $news,
            'foods'      => $foods,
        ]);
    }

    public function profile()
    {
        return Inertia::render("Auth/Profile");
    }


    public function pageContent()
    {
        //get page contents
        $home = Page::where('name', 'home')->first();
        $composition_table = Page::where('name', 'composition_table')->first();
        $project_overview = Page::where('name', 'project_overview')->first();
        $faqs = Page::where('name', 'faqs')->first();
        $contacts = Page::where('name', 'contacts')->first();
        return Inertia::render("Auth/PageContent", [
            "home"                  => new PageResource($home),
            "composition_table"     => new PageResource($composition_table),
            "project_overview"      => new PageResource($project_overview),
            "faqs"                  => new PageResource($faqs),
            "contacts"              => new PageResource($contacts),
        ]);
    }

    public function updatePageContent(Request $request)
    {
        $request->validate([
            'page'  => 'required'
        ]);

        $page = Page::where('name', $request->page)->first();
        if (is_object($page)) {
            switch ($request->page) {
                case 'home':
                    $page->update([
                        'contents' => json_encode([
                            'home_section_1_title'       => $request->home_section_1_title,
                            'home_section_1_subtitle'    => $request->home_section_1_subtitle,
                            'home_section_2_title'       => $request->home_section_2_title,
                            'home_section_2_subtitle'    => $request->home_section_2_subtitle,
                        ])
                    ]);
                    break;
                case 'composition_table':
                    $page->update([
                        'contents' => json_encode([
                            'composition_table_description' => $request->composition_table_description
                        ])
                    ]);
                    break;
                case 'project_overview':
                    $page->update([
                        'contents' => json_encode([
                            'project_overview_description'  =>  $request->project_overview_description,
                            'project_overview_main_text'    =>  $request->project_overview_main_text,
                        ])
                    ]);
                    break;
                case 'faqs':
                    $page->update([
                        'contents' => json_encode($request->faqs)
                    ]);
                    break;
                case 'contacts':
                    $page->update([
                        'contents' => json_encode([
                            'contacts_description'  =>  $request->contacts_description,
                            'contacts'              =>  $request->contacts
                        ])
                    ]);
                    break;
            }

            return Redirect::back()->with('success', 'Successfully updated content!');
        } else {
            return Redirect::back()->with('error', "An error occured, invalid page.");
        }
    }
}
