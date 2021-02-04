<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function about() {
        // return "hi";
        // $name = "復仇者聯盟";
        // $js = "<script>alert('hi');</script>";
        $heroes = ["鋼鐵人", "美國隊長", "綠巨人浩克", "索爾", "洛基", "黑寡婦", "鷹眼"];
        return view('pages.about', ['heroes' => $heroes]);
    }
}
