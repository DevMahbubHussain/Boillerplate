<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromController extends Controller
{

//create a route that accept only numbers
   public function index($num)
   {
        return response()->json([
            'data' =>$num
        ],200);
   }

//return from controller a json data with a msg if the given number is odd or even 
   public function evenOdd($number)
    {
        if($number % 2 == 0){
            return response()->json([
               'output' =>$number,
               'msg' =>'Number is Even'
            ],200);
        }
        else{
         return response()->json([
               'output' =>$number,
               'msg' =>'Number is Odd'
            ],200); 
        }
    }

    //create a post route and return true false if user has given email data or not
    public function emailCheck(Request $request)
    {
        $emailcheck =  $request->all();

        if (empty($emailcheck))
            return $emailcheck == false ? 'False' : '';
        else
            return true ? 'True' : '';
    }

}
