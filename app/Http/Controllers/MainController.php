<?php

namespace App\Http\Controllers;

use App\Http\FileClass;
use App\Subscribe;
use Carbon\Carbon;
use ElForastero\Transliterate\Transliteration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App;
use Symfony\Component\HttpFoundation\Cookie;

class MainController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Libs
    |--------------------------------------------------------------------------
    */

    public function fileUploads(Request $request)
    {
        $rules = [
            'upload' => 'required',
        ];

        $v = Validator::make($request->all(), $rules);

        if ($v->fails()) return response()->json($v->errors(), 422);

        $file = new FileClass();
        $file_name = $file->uploadFile($request->upload);

        $message = 'Файл загружен';

        $callback = $_REQUEST['CKEditorFuncNum'];
        return '<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction("' . $callback . '", "/uploads/'.$file_name.'", "' . $message . '" );</script>';
    }

    public function subscribe(Request $request)
    {
        $rules = [
            'email' => 'required',
        ];

        $v = Validator::make($request->all(), $rules);

        if ($v->fails()) return response()->json($v->errors(), 422);

        if  ($request->has('email')) {
            Subscribe::updateOrCreate(['email' => $request->email], ['email' => $request->email]);
        }

        return response()->json(['status' => 'ok', 'message' => 'Подписка оформлена']);
    }

    public function unSubscribe()
    {
        return view('pages.unsubscribing');
    }

    public function unSubscribing(Request $request)
    {
        $rules = [
            'email' => 'required',
        ];

        $v = Validator::make($request->all(), $rules);

        if ($v->fails()) return back()->withErrors($v->errors());

        if  ($request->has('email')) {
            Subscribe::where('email', $request->email)->delete();
        }

        return back()->with('status', 'Вы отписаны от рассылки');
    }

    public function requests_k(Request $request) {

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ];

        $v = Validator::make($request->all(), $rules);

        if ($v->fails()) return response()->json($v->errors(), 422);

        /*$comment = new App\Requests();
        $comment->item_id = $request->good_id;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->phone = $request->phone;
        $comment->text = $request->text;
        $comment->save();*/

        return response()->json('ok');
    }

    /*
    |--------------------------------------------------------------------------
    | WebSite
    |--------------------------------------------------------------------------
    */

    public function index() {

        $services = App\Service::orderBy('position', 'ASC')->where('enable', 1)->take(4)->get();
        $gal = App\Gallery::orderBy('position', 'ASC')->where('enable', 1)->get();

        return view('pages.main', compact('services', 'gal'));
    }

    public function services() {

        $services = App\Service::orderBy('position', 'ASC')->where('enable', 1)->get();

        return view('pages.services', compact('services'));
    }

    public function articles($url = null) {

        if($url !== null) {

            $item = App\Article::where('url', $url)->first();

            if(isset($item)) {

                return view('pages.articles.show', compact('item'));
            } else {
                return abort('404');
            }
        }

        $items = App\Article::orderBy('created_at', 'DESC')->where('enable', 1)->get();

        return view('pages.articles.index', compact('items'));
    }

    public function foto_gallary() {

        $gal = App\Gallery::orderBy('position', 'ASC')->where('enable', 1)->get();
        $womans = App\Foto::orderBy('position', 'ASC')->where('enable', 1)->get();

        return view('pages.gallary', compact('gal', 'womans'));
    }

    // Sitemaps
    public function sitemap() {
        $last_news_time = $this->last_news_time();

        return response()->view('sitemap.sitemap', compact('last_news_time'))->header('Content-Type', 'application/xml');
    }

    public function sitemap_items() {
        $items = App\Item::select('url', 'created_at')
            ->where('enable', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->view('sitemap.items', compact('items'))->header('Content-Type', 'application/xml');
    }

    public function sitemap_main() {
        $last_news_time = $this->last_news_time();

        $articles = App\Article::where('enable', true)->orderBy('created_at', 'desc')->get();
        $stocks = App\Stock::where('enable', true)->orderBy('created_at', 'desc')->get();

        return response()->view('sitemap.main', compact('last_news_time', 'articles', 'stocks'))->header('Content-Type', 'application/xml');
    }

    public function sitemap_category() {
        $category = App\Category::select('id', 'url', 'updated_at')->where('enable', 1)->where('parent', 0)->get();

        $cat_data = [];
        foreach($category as $cat) {
            $news = App\Item::get_LastNewsByCat($cat->id);

            $cat_data[] = (object)[
                'url' => $cat->url,
                'created_at' => (count($news) > 0) ? $news[0]->created_at : $cat->created_at
            ];
        }

        return response()->view('sitemap.category', compact('cat_data'))->header('Content-Type', 'application/xml');
    }

}