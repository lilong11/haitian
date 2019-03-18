@extends('admin.layout.index')
@section('content')
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 左侧菜单开始 -->
        <div class="left-nav">
          <div id="side-nav">
            <ul id="nav">
                <li class="list" current>
                    <a href="./Admin_public/index.html">
                        <i class="iconfont">&#xe761;</i>
                        欢迎页面
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                </li>
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        会员管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="member-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                会员列表
                            </a>
                        </li>
                        <li>
                            <a href="member-del.html">
                                <i class="iconfont">&#xe6a7;</i>
                                会员删除
                            </a>
                        </li>
                        <li>
                            <a href="member-level.html">
                                <i class="iconfont">&#xe6a7;</i>
                                等级管理
                            </a>
                        </li>
                        <li>
                            <a href="member-kiss.html">
                                <i class="iconfont">&#xe6a7;</i>
                                积分管理
                            </a>
                        </li>
                        <li>
                            <a href="member-view.html">
                                <i class="iconfont">&#xe6a7;</i>
                                浏览记录
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        商品管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu opened">
                        <li class="current">
                            <a href="/goods">
                                <i class="iconfont">&#xe6a7;</i>
                                商品列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        分类管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/type"">
                                <i class="iconfont">&#xe6a7;</i>
                                分类列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        轮播管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./Admin_public/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        管理员管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./Admin_public/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        系统统计
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./Admin_public/echarts1.html">
                                <i class="iconfont">&#xe6a7;</i>
                                拆线图
                            </a>
                        </li>
                        <li>
                            <a href="./Admin_public/echarts2.html">
                                <i class="iconfont">&#xe6a7;</i>
                                柱状图
                            </a>
                        </li>
                        <li>
                            <a href="./Admin_public/echarts3.html">
                                <i class="iconfont">&#xe6a7;</i>
                                地图
                            </a>
                        </li>
                        <li>
                            <a href="./Admin_public/echarts4.html">
                                <i class="iconfont">&#xe6a7;</i>
                                饼图
                            </a>
                        </li>
                        <li>
                            <a href="./Admin_public/echarts5.html">
                                <i class="iconfont">&#xe6a7;</i>
                                k线图
                            </a>
                        </li>
                        <li>
                            <a href="./Admin_public/echarts6.html">
                                <i class="iconfont">&#xe6a7;</i>
                                仪表图
                            </a>
                        </li>
                        <li>
                            <a href="http://echarts.baidu.com/examples.html">
                                <i class="iconfont">&#xe6a7;</i>
                                更多案例
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        系统设置
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./Admin_public/banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form xbs" action="" >
                <div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                    <label class="layui-form-label xbs768">日期范围</label>
                    <div class="layui-input-inline xbs768">
                      <input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
                    </div>
                    <div class="layui-input-inline xbs768">
                      <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><a href="/goods/create/"><button class="layui-btn" ><i class="layui-icon">&#xe608;</i>添加</button></a><span class="x-right" style="line-height:40px">共有数据：88 条</span></xblock>
            @if (session('success'))
                <div class="btn btn-success">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="btn btn-danger">
                    {{ session('error') }}
                </div>
            @endif
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            商品名
                        </th>
                        <th>
                            商品图片
                        </th>
                        <th>
                            商品价格
                        </th>
                        <th>
                            商品数量
                        </th>
                        <th>
                            商品描述
                        </th>
                        <th>
                            状态
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>                
                @foreach($goods_data as $k=>$v)
                <tbody>
                    <tr>                        
                        <td>
                            {{ $id++ }}
                        </td>
                        <td>
                            <u style="cursor:pointer" onclick="member_show('张三','member-show.html','10001','360','400')">
                                {{ $v->gname }}
                            </u>
                        </td>
                        <td>
                            <img src="/uploads/{{ $v->pic }}" alt="" width="80px">                            
                        </td>
                        <td >
                            {{ $v->price }}
                        </td>
                        <td >
                            {{ $v->goodsNum }}
                        </td>
                        <td>
                            {{ $v->goodsDes }}
                        </td>
                        <td class="td-status">
                            <span class="layui-btn layui-btn-normal layui-btn-mini">
                                {{ $v->goodsState == 1 ? '已启用' : '已停用' }}
                            </span>
                        </td>
                        <td class="td-manage">
                            <a style="text-decoration:none" onclick="member_stop(this,'10001')" href="javascript:;" title="停用">
                                <i class="layui-icon">&#xe601;</i>
                            </a>
                            <a title="编辑" href="/goods/show?id={{ $v->id }}">
                                <i class="layui-icon">&#xe642;</i>
                            </a>                                       
                            <form action="/goods/{{ $v->id }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="pic" value="{{ $v->pic }}">
                                <input type="submit" value="删除" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
@endsection