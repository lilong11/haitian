<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\Usersinfos; 
use App\Models\works;
use App\Models\Issues;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserinfoController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = new Users;
        $users = $user->find($id); 
        $data = $users->userinfo;
        // dd($data);


        $work = new works; //查文章表
        $works = $work->all();  


        $issue = new Issues; //查问题表
        $issues = $issue->all();   
        // dd($data->id);
        return view('Home.usersinfo.edit',['title'=>'用户资料修改','works'=>$works,'issues'=>$issues,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $userinfo =  Usersinfos::find($id);

        // 用户传过来的信息
        $data = $request->except('_token');

        $userinfo->sex = $data['sex'];
        $userinfo->city = $data['city'];
        $userinfo->sign = $data['sign'];
        $bool = $userinfo->save(); 

        if($bool){
             echo '<script>alert("修改成功.");location="/users"</script>';
        }else{  
             echo '<script>alert("修改失败!");location="/infoEdit/{{$id}}"</script>'; 
        }



    	// dump($id);
        // dump($request->except('_token'));
    } 


    public function password()
    {
    	$work = new works; //查文章表
        $works = $work->all();  


        $issue = new Issues; //查问题表
        $issues = $issue->all(); 
 
        return view('Home.usersinfo.password',['title'=>'用户密码修改','works'=>$works,'issues'=>$issues]);
    }

    public function doPassword(Request $request)
    {
    	$uname['uname'] = session('home'); 
        $password =  Hash::make($request['password']); 
        // 判断用户是否在数据库中存在
	       	if($request['repassword'] != $request['repasswords']){ 
	     echo '<script>alert("新密码俩次密码不一致!");location="/password"</script>';exit; 
		}
        if (Auth::attempt(['uname' => $uname,'password' => $password])) { 
 			$id = session('uid');
			$user = Users::find($id);

        	$user->password = $request->input('repassword','');
	        $res1 = $user->save();
        	// dump($res1);
             echo '<script>alert("密码已更新,请重新登入.");location="/users/login"</script>';
        }else{  
        	echo '旧密码错误';
             // echo '<script>alert("旧密码不正确");location="/password"</script>'; 
        }
    }
}