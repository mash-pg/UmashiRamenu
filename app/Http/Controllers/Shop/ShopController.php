<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Access;
use App\Models\Budget;
use App\Models\Parking;
use App\Models\Seat;
use App\Models\Shop;
use App\Models\ShopEtc;
use App\Models\ShopPay;
use App\Models\Smoking;
use Illuminate\Http\Request;


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

    public function show_ref($id){
        //店舗情報
        //eager load
        //詳細画面はメインの１店舗のみの情報を扱うので単数系
        $shop = Shop::with(["menus_ref", "images_ref", "access_ref"])->findOrFail($id);


        /**
         * ①全体を通して、表示上の問題なのか、ビジネスロジックなのかを分ける。
         *
         * ②imagesと比べてmenusのimgのパスの最後にスラッシュがない。MenusModelでそこの差分吸収している
         *
         *
         * 余談：データベースの話で、menusのpriceに「円」を入れない。
         * priceの検索ができなくなるし「円」は表示上の問題
         *
         */

        return view('shops.show_ref', compact("shop"));
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
        $shops = Shop::findOrFail($id);

        //店舗idの取得
        $shop_id = $shops->id;

        //スモーキングid
        $smoking_id = $shops->smoking_id;

        //スモーキングエリア
        $smoking = Smoking::find($smoking_id);

        //イメージ画像（内観、外観、メニュー画像）
        $images = array();

        //配列にプッシュする
        foreach($shops->images as $image){
            array_push($images,$image->path.$image->pivot->img);
        }
        foreach ($shops->menus as $menu){
            array_push($images,$menu->path."/".$menu->pivot->img);
        }
        $images = array_unique($images);
        $images = array_slice($images,0,6);

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
        $menu_title = array();
        $menus = array();
        $price = array();

        foreach($shops->menus as $menu){
            $menu->id;
            $menu->type;
            array_push($menu_title,$menu->type);
            array_push($menus,$menu->pivot->menu);
            array_push($menus,$menu->pivot->price);
        }
        //座席数
        $seats = Seat::where('shop_id',$shop_id)->first();

        //クレジットカード
        $pays = array();
        foreach($shops->pays as $pay){
            $pay->id;
            $pay->type;
            array_push($pays,$pay->type);
        }

        $pays = array_unique($pays);
        $credit = "クレジット";
        $elect_money = "電子マネー";
        $ql_code = "QRコード決済";
        $available = "利用可能";
        $unavailable = "利用不可";

        $credit_search = in_array($credit,$pays);
        $elect_money_search = in_array($elect_money,$pays);
        $ql_code_search = in_array($ql_code,$pays);
        $credit_type = array();

        if($credit_search){
            array_push($credit_type,$credit."　:　".$available);
        }else{
            array_push($credit_type,$credit."　:　".$unavailable);
        }

        if($elect_money_search){
            array_push($credit_type,$elect_money."　:　".$available);
        }else{
            array_push($credit_type,$elect_money."　:　".$unavailable);
        }

        if($ql_code_search){
            array_push($credit_type,$ql_code."　:　".$available);
        }else{
            array_push($credit_type,$ql_code."　:　".$unavailable);
        }

        //予算
        $budget = Budget::where('shop_id',$shop_id)->first();

        //パーキング
        $parking = Parking::where('shop_id',$shop_id)->first();
        $parking_area = array();

        if($parking->parking === 1){
            array_push($parking_area,$available);
        }else{
            array_push($parking_area,$unavailable);
        }

        //店舗備考
        $shop_etc = ShopEtc::where('shop_id',$shop_id)->first();

        return view('shops.show', compact(
            'shops','smoking',
            'access','categories','menus','price','images',
            'seats','credit_type','budget','shop_etc','parking_area'));
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
