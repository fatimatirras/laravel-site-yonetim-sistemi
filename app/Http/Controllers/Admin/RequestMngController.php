<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RequestMng;
use Illuminate\Http\Request;

class RequestMngController extends Controller
{
    public function index()
    {
        $datalist=RequestMng::all();
        return view('admin.requestmng',['datalist'=>$datalist]);
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
     * @param  \App\Models\requestMng  $requestMng
     * @return \Illuminate\Http\Response
     */
    public function show(RequestMng $requestMng,$id)
    {
        $data=RequestMng::find($id);
        return view('admin.requestmng_edit',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\requestMng  $requestMng
     * @return \Illuminate\Http\Response
     */
    public function edit(requestMng $requestMng)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\requestMng  $requestMng
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestMng $requestMng,$id)
    {
        $data=RequestMng::find($id);
        $data->status=$request->input('status');
        $data->save();
        return back()->with('success','Talep Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\requestMng  $requestMng
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestMng $requestMng,$id)
    {
        $data=RequestMng::find($id);
        $data->delete();
        return redirect()->back()->with('success','Talep Silindi!');

    }
}
