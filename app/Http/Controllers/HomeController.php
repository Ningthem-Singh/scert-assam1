<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Institutes;
use App\Models\Notification;
use App\Models\Sliders;

class HomeController extends Controller
{

    public function index()
    {
        $sliderImage = Sliders::orderBy('id', 'DESC')->offset(1)->limit(3)->get();

        $firstSlider = Sliders::latest()->first();

        $data = About::first();

        $notifications = Notification::orderByDesc('updated_at')->get();

        return view('home', compact('sliderImage', 'firstSlider', 'data', 'notifications'));
    }

    public function about()
    {
        $data = About::get();
        return view('about', compact('data'));
    }
    public function institutes()
    {
        $institutes = Institutes::join('master_districts', 'institutes.district', '=', 'master_districts.id')
            ->join('master_teis', 'institutes.teis', '=', 'master_teis.id')
            ->select('institutes.*', 'master_districts.district_name', 'master_teis.teis_name')
            ->orderBy('institutes.id', 'desc')
            ->get();
        // dd($institutes);
        return view('institutes', compact('institutes'));
    }
    public function contact()
    {
        return view('contact');
    }
}
