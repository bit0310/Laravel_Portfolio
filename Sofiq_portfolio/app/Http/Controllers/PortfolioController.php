<?php

namespace App\Http\Controllers;



class PortfolioController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }

    public function about(){
        return view('front-end.about.about');
    }

    public function portfolio(){
        return view('front-end.portfolio.portfolio');
    }

    public function research(){
        return view('front-end.research.research');
    }

    public function project1(){
        return view('front-end.project.project1');
    }

    public function project2(){
        return view('front-end.project.project2');
    }

    public function contact(){
        return view('front-end.contact.contact');
    }


     public function gallery(){
            return view('front-end.gallery.gallery');
        }

        public function register(){
            return view('front-end.register.register');
        }


}
