<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controllers;
use App\Author;
use App\Banner;
use App\Product;
use App\Farmer;
use App\Testimonial;
use App\Benefit;
use App\Promo;
use App\Page;
use App\Partener;
use App\Add;
use App\Prodcategory;
use App\Feedb;
use App\Descript;
use App\Tag;


class FrontendController extends Controller
{
    public function index(){
        $banner = Banner::all();
        $products = Product::with('category')->get();

        $farmers = Farmer::all();
        $testimonials = Testimonial::all();
        $benefits = Benefit::all();
        $promos = Promo::all();
        
        $parteners = Partener::all();
        $adds = Add::all();
        $categories = Prodcategory::all();
        $is_top_sellings = Product::where('is_top_selling', 1)->get();
        $tags = Tag::all();
        
    
        
    return view('pages.index',  compact('banner', 'products', 'farmers', 'testimonials', 'benefits', 'promos', 'adds', 'pages', 'parteners', 'adds', 'categories','is_top_sellings', 'tags'));
    

    }
    public function contact(){
        
        
        return view('pages.contact');
    }
    public function testimonials(){
        
      
        $pages = Page::all();
        return view('pages.testimonials', compact('pages'));
    }
    public function abaut(){
        return view('about');
    }
    public function subscribe(){

        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function info(){
        return view('info');
    }
    
   public function shop(){
       return view('pages.shop');
    
   }
   public function blog(){
       return view('pages.blog.blog-details');
   }
   public function faq(){
       return view('pages.faq');
   }

   }
