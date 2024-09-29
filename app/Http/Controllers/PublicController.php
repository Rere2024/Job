<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
         return view('public.index');
     }

     public function about()
     {
          return view('public.about');
      }

      public function category()
      {
           return view('public.category');
       }

       public function contact()
       {
            return view('public.contact');
        }
 
        public function jobDetails()
        {
             return view('public.job-detail');
         }
  
         public function jobList()
         {
              return view('public.job-list');
          }

            public function testimonial()
            {
                 return view('public.testimonial');
             }


}
