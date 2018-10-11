@extends('layouts.app')

@section('content')
    <div id="index">
        <div class="ui blue inverted menu">
            <a class="item">CRM管理系统 <small>v1.0</small></a>
            <div class="right menu">
                <a class="item">
                    消息 <div class="ui orange circular label">0</div>
                </a>
                <div class="ui dropdown item">
                    我的账户 <i class="dropdown icon"></i>
                    <div class="menu">
                        <a href="" class="item"><i class="lock icon"></i> 修改密码</a>
                        <a href="" class="item"><i class="user icon"></i> 我的资料</a>
                        <a href="" class="red item"><i class="power icon"></i> 注销登录</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui grid">
            <div class="three wide column">
                <div class="ui styled accordion">
                    <div class="active title">
                        <i class="dropdown icon"></i> 个人办公
                    </div>
                    <div class="active content">
                        <p><a href="" class="item">我的去向</a></p>
                        <p><a href="" class="item">员工去向</a></p>
                    </div>
                    <div class="title">
                        <i class="dropdown icon"></i> 信息中心
                    </div>
                    <div class="content">
                        <p><a href="" class="item">我的消息</a></p>
                        <p><a href="" class="item">通知公告</a></p>
                    </div>
                </div>
            </div>
            <div class="thirteen wide column">
                rerg
            </div>
        </div>
    </div>
@endsection
