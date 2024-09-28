<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
         return view('index');
     }

     public function about()
     {
          return view('about');
      }

      public function category()
      {
           return view('category');
       }

       public function contact()
       {
            return view('contact');
        }
 
        public function jobDetails()
        {
             return view('job-detail');
         }
  
         public function jobList()
         {
              return view('job-list');
          }

            public function testimonial()
            {
                 return view('testimonial');
             }


}
