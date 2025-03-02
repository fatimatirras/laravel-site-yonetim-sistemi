<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Message;
use App\Models\RequestMng;
use App\Models\Review;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\IsEmpty;

class HomeController extends Controller
{

    public static function menulist()
    {
        return Menu::where('parent_id', '=' ,0)->with ('children')->get();
    }
    //

    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Content::select('id','title','image','type','menu_id')->limit(4)->get();
        $last=Content::select('id','title','image','menu_id','type')->limit(6)->orderByDesc('id')->get();

        $data= [
            'setting' =>$setting,
            'slider' =>$slider,
            'last' =>$last,
            'page'=>'home'
        ];
        return view('home.index',$data);
    }

    public function content($id,$slug){
        $setting=Setting::first();
        $data=Content::find($id);
        $picked=Content::select('id','title','image','slug')->limit(3)->inRandomOrder()->get();
        $reviews=Review::where('content_id',$id)->get();
        $datalist=Image::where('content_id',$id)->get();
        return view('home.content_detail',['setting'=>$setting,'picked'=>$picked,'data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);

    }
    public function menucontents($id,$slug){
        $setting=Setting::first();
        $datalist=Content::where('menu_id',$id)->get();
        $data=Menu::find($id);

        return view('home.menu_contents',['data'=>$data,'datalist'=>$datalist,'setting'=>$setting]);

    }
    public function signin()
    {
        return view('home.signin');
    }

    public function myaccount()
    {
        return view('home.myaccount');
    }


    public function login()
    {
        return view('admin.login');
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.aboutus',['setting' =>$setting]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting' =>$setting]);
    }
    public function faq(){
        $setting=Setting::first();
        $datalist=Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist,'setting'=>$setting]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting' =>$setting]);
    }
    public function request(){
        $setting=Setting::first();
        return view('home.request',['setting'=>$setting,'page'=>'home']);
    }
    public function sendrequest(Request $request)
    {
        $data = new RequestMng;

        $data->user_id = Auth::id();
        $data->subject = $request->input('subject');
        $data->request = $request->input('request');

        $data->save();

        return redirect()->route('request')->with('success','Your message has been sent!');
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('success','Mesajınız başarılı bir şekilde kaydedilmiştir!');
    }

    public function sendreview(Request $request,$id)
    {
        $data = new Review;

        $data->user_id = Auth::id();
        $content = Content::find($id);
        $data->content_id=$id;
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->IP = $_SERVER['REMOTE_ADDR'];



        $data->save();

        return redirect()->route('content',['id'=>$content->id,'slug'=>$content->slug])->with('success','Your message has been saved!');
    }


    public function logincheck(Request $request)
    {


        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',

          ]);
        }
        else
        {
            return view('admin.login');
        }
    }



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
