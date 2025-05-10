<?php

namespace App\Http\Controllers;


use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    //

    public function index(Request $request)
    {

        $query = Transport::query();
        $keyword = $request->keyword;
        if($request->keyword)
        {
            $query->whereHas('transaction',function($query) use ($keyword){
                $query->where('no_do','LIKE','%'.$keyword.'%');
            });
        }

        $transport =  $query->get();
        return view('transport.all-transport', [
            'title' => 'Seluruh Transport',
            'transport' => $transport
        ]);
    }
    public function addTransportView()
    {
        return view('transport.all-transport', [
            'title' => 'Seluruh Transport'
        ]);
    }
}
