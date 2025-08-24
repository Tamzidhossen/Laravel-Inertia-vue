<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function Home()
    {
        $meta = ['title'=> 'Laravel Inertia Project'];
        return Inertia::render('Components/Home')->withViewData(['meta'=>$meta]);
    }
    public function Page1()
    {
        return Inertia::render('Page1');
    }
    public function Page2()
    {
        $share_Data = ["message" => "Text Message", "status" => true, "share_data" => "This is shared data from controller"];   
        return Inertia::render('Page2')->with($share_Data);
    }
    public function Page3()
    {
        return Inertia::render('Page3');
    }
    public function Page4()
    {
        return Inertia::render('Page4');
    }
    public function Page5()
    {
        return Inertia::render('Page5');
    }
}
