<?php

namespace App\Http\Controllers;

use App\Models\product;
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

      public function liveSearch(Request $request)
  {
      $search = $request->id;

      if (is_null($search))
      {
         return view('pages.Tracker');
      }
      else
      {
          $posts = Product::where('product_id','LIKE',"%{$search}%")
                         ->get();

          return view('pages.tracker')->withPosts($posts);
      }
  }

      function action(Request $request)
        {
            if($request->ajax())
            {
                $output = '';
                $query = $request->get('query');
                if($query != '')
                    {
                        $data = DB::table('tbl_customer')->where('CustomerName', 'like', '%'.$query.'%')
                                                            ->orWhere('Address', 'like', '%'.$query.'%')
                                                            ->orWhere('City', 'like', '%'.$query.'%')
                                                            ->orWhere('PostalCode', 'like', '%'.$query.'%')
                                                            ->orWhere('Country', 'like', '%'.$query.'%')
                                                            ->orderBy('CustomerID', 'desc') ->get();
                                                            }
                                                            else
                                                                {
                                                                    $data = DB::table('tbl_customer')->orderBy('CustomerID', 'desc')
                                                                                                    ->get();
                                                                                                    }
                          $total_row = $data->count();
                          if($total_row > 0)
                            {
                                foreach($data as $row)
                                    {
                                        $output .= ''.$row->CustomerName.''.$row->Address.''.$row->City.''.$row->PostalCode.''.$row->Country.'';
                                        }
                                    }
                            else
                                {
                                    $output = 'No Data Found';
                                     }
                            $data = array( 'table_data' => $output, 'total_data' => $total_row );
                            echo json_encode($data);
                                    }
        }



}
