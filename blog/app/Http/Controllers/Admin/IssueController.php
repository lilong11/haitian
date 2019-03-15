<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Issues;
use App\Http\Requests\WorksStoreBlogPost;
use DB;
class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 接收搜索的关键字
        $search = $request->input('search','');

        // 接收 搜索的 显示条数
        $count = $request->input('count',5);
        $issue = new Issues;
        $data = $issue->where('title','like','%'.$search.'%')->paginate($count); 

        return view('Admin.issue.index',['search'=>$search,'count'=>$count,'title'=>'问题列表','data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.issue.create',['title'=>'问题添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $data = $request->except('_token');
         $bool = DB::table('issues')->insert($data);
         if($bool){ 
            return redirect('issue')->with('success','添加成功');
         }else{ 
            return redirect('issue')->with('error','添加失败');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dump($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $issues = new Issues;
        $data = $issues->find($id);
        return view('Admin\issue\edit',['title'=>'问题修改','data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorksStoreBlogPost $request, $id)
    {
        $data = $request->except('_token','_method');
        $bool = DB::table('issues')->insert($data);
         if($bool){ 
            return redirect('issue')->with('success','修改成功');
         }else{ 
            return redirect('issue')->with('error','修改失败');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       $bool = Issues::destroy($id);
    if($bool){ 
        return redirect('issue')->with('success','删除成功');
     }else{ 
        return redirect('issue')->with('error','删除失败');
     }
    }
}