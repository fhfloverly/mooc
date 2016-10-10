<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StuController extends Controller
{
    public function index()
	{
		$list=\DB::table('user')->get();
		//dd($list);
		return view('stu.index',['list'=>$list]);
		
	}
	
	public function show($id)
	{
		return "查看学生信息ID".$id;
	}
	
	public function create()
	{
		return view("stu.add");
	}
	
	public function store(REQUEST $request)
	{
		//return "执行添加";
		$data=$request->only("name","age","sex");
		$id= \DB::table("user")->insertGetId($data);

		if($id>0){
			return "添加成功";

		}else{
			return "添加失败";
		}
	}
	
	public function edit($id)
	{
		

		$stu=\DB::table("user")->where('id',$id)->first();
		return view("stu.edit",['st'=>$stu]);

	}
	
	public function update(REQUEST $request,$id)
	{
		//return "执行修改";
		$data=$request->only("name","age","sex");
		//dd($data);

		\DB::table("user")->where("id",$id)->update($data);

		    //return "修改成功";
		return redirect("/stu");
	}
	
	public function destroy($id)
	{
		return "执行删除";
		 \DB::table('user')->where('id',$id)->delete();//删除制定的id

        //2 删除后执行跳转 
        
        return redirect("/stu");

	}	

}	