<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\MenuType;
use App\Models\Shop;
use App\Models\Smoking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //店舗情報
        $shops = Shop::find($id);
        //店舗id
        $shop_id = $shops->id;
        //スモーキングid
        $smoking_id = $shops->smoking_id;
        //スモーキングエリア
        $smoking = Smoking::find($smoking_id);
        //住所
        $access = Access::where('shop_id',$shop_id)->first();
        //カテゴリー
        $categories = array();
        foreach($shops->categories as $category){
            $category->id;
            $category->type;
            array_push($categories,$category->type);
        }
        $categories = array_unique($categories);

        //メニュー
        $menus = array();
        $price = array();
        $menu_name = array();
        foreach($shops->menus as $menu){
            $menu->id;
            $menu->type;
            array_push($price,$menu->pivot->price);
            array_push($menu_name,$menu->pivot->menu);
            array_push($menus,$menu->type);
        }

        return view('shops.show', compact(
            'shops','smoking',
            'access','categories','menus','price','menu_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
