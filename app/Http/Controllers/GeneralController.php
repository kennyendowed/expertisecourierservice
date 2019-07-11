<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class GeneralController extends Controller
{
  public function __construct()
  {

  }


          public function index()
            {

              return view('pages.Tracker');
            }

            /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show(Order $order)
      {
          return view('show', compact('order'));
      }

}
