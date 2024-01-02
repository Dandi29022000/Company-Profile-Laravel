<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Blog;
use App\Models\TimKami;

use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend/package/dashboard');
    }

    public function service(){
        return view('frontend/package/layanan');
    }

    public function portofolio(){
        $portofolio = Portofolio::all();
        return view('frontend/package/portofolio', compact('portofolio'));
    }

    public function portofolioShow($id)
    {
        $portofolio = Portofolio::where('id', $id)->first();
        return view('frontend/package/portofolio-detail', compact('portofolio'));
    }

    public function blog(){
        $blog = Blog::all();
        return view('frontend/package/blog', compact('blog'));
    }

    public function blogShow($id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('frontend/package/blog-detail', compact('blog'));
    }

    public function about(){
        $TimKami = TimKami::all();
        return view('frontend/package/tentang',compact('TimKami'));
    }

    public function contact(){
        return view('frontend/package/kontak');
    }
}
