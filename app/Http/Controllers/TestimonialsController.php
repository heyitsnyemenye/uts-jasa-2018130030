<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use\App\Classes\Notifikasi;

class TestimonialsController extends Controller
{
    public function __invoke(Request $request)
    {
        $carousels = [
        [
            "url" => "https://source.unsplash.com/user/erondu/900x300",
            "width" => "900",
            "height" => "300"
        ],
        [
            "url" => "https://source.unsplash.com/user/charlesdeluvio/900x300",
            "width" => "900",
            "height" => "300"
        ],
        [
            "url" => "https://source.unsplash.com/user/danielkorpai/900x300",
            "width" => "900",
            "height" => "300"
        ]
    ];
    return view('testimonials', compact('carousels'));
    }
}
