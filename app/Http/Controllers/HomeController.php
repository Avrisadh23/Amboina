<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Testimonial;


class HomeController extends Controller

{
    public function index()
    {
        $services = Service::all();
        $testimonials = Testimonial::all();
        $stats = [
            'happy_customers' => 300,
            'awards' => 20,
            'projects' => 555
        ];
        
        return view('home', compact('services', 'testimonials', 'stats'));
    }
}