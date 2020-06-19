<?php

namespace App\Http\Controllers;

use App\Produk;
use DB;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $urutan = [2,4,6,3,5,7,8,10,9];
        $sessionId = session()->getId();
        $session = DB::table("sessions")->where("id",$sessionId)->first();
        if($session){
            if ($session->last_activity == 8) {
                DB::table("sessions")->where("id",$sessionId)->update([
                    "last_activity" => 0
                ]);
            }
            else {
                DB::table("sessions")->where("id",$sessionId)->update([
                    "last_activity" => $session->last_activity+1
                ]);
            }
            $index = $session->last_activity;
		}else{
            DB::table("sessions")->insert([
                "id" => $sessionId,
                "last_activity" => 1
            ]);
            $index = 0;
        }
        $sofa = DB::table("produks")->where("id",$urutan[$index])->first();
        $sofa->price = number_format($sofa->price, 2, ',','.');
        return  view('index', compact('sofa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
