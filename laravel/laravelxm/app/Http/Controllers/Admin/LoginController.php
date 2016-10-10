<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('admin.login.login');
    }

    public function dologin(Request $request)
    {
    	// $data = \DB::table('users')->get();
    	// dd($data);
    	$mycode = session()->get('code');
    	if($mycode!=$request->input('code')){
    		return back()->with('msg','验证码错误');
    	}

    	$email = $request->input('email');
    	$pwd = $request->input('password');
    	$ob = \DB::table('users')->where('email',$email)->first();
    	if($ob){
    		if($ob->password==$pwd){
    			session()->set('adminuser',$ob);
    			return redirect('admin/index');
    		}
    		return back()->with('msg','用户或密码错误');
    	}
    	return back()->with("msg","用户或密码错误");
    }

    public function captcha($tmp)
    {
    	 $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        // Session::flash('milkcaptcha', $phrase);
        //生成图片
        // header("Cache-Control: no-cache, must-revalidate");
        // header('Content-Type: image/jpeg');
        // $builder->output();
        session()->flash('code',$phrase);
        return response($builder->output())->header('Content-Type','image/jpeg');
    }

    public function logout()
    {
        session()->forget('adminuser');
        return redirect('admin/login');
    }
}
