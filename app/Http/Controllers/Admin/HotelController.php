<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Hotel::all();
        return view('admin.hotel',['datalist'=> $datalist]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Menu::all();
        return view('admin.hotel_add',['datalist'=> $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Hotel;
        $data->menu_id = $request->input('menu_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->detail = $request->input('detail');
        $data->menu = $request->input('menu');
        $data->haber = $request->input('haber');
        $data->duyuru = $request->input('duyuru');
        $data->user_id = Auth::id();
        $data->status = $request->input('status');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->save();
        return redirect()->route('admin_hotels');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel,$id)
    {
        $data = hotel::find($id);
        $datalist = Menu::all();
        return view('admin.hotel_edit',['data'=> $data, 'datalist' =>  $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Hotel $hotel,$id)
    {
        $data = hotel::find($id);
        $data->menu_id = $request->input('menu_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');

        $data->detail = $request->input('detail');
        $data->menu = $request->input('menu');
        $data->haber = $request->input('haber');
        $data->duyuru = $request->input('duyuru');
        $data->user_id = Auth::id();
        $data->status = $request->input('status');
        $data->image = Storage::putFile('images',$request->file('image'));
        $data->save();
        return redirect()->route('admin_hotels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Hotel $hotel,$id)
    {
        DB::table('hotels')->where('id','=',$id)->delete();
        return redirect()->route('admin_hotels');
    }
}
