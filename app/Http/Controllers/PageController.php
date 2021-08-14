<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Homevideo;

class PageController extends Controller
{
    public function home() {
        $videos = Video::all();
        $homevideos = Homevideo::all();
        return view('pages.home', compact('videos', 'homevideos'));
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function package() {
        return view('pages.package');
    }

    public function service() {
        return view('pages.service');
    }

    public function admin() {
        return view('admin.adminDashboard');
    }

}
