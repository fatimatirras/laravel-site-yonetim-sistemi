<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
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
        $slider = Content::select('id','title','image')->limit(4)->get();

        $data= [
            'setting' =>$setting,
            'slider' =>$slider,
            'page'=>'home'
        ];
        return view('home.index',$data);
    }

    public function content($id)
    {
        $data = Content::find($id);
        print_r($data);
        exit();
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
    public function faq()
    {
        return view('home.aboutus');
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting' =>$setting]);
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
