@extends('app')

@section('content')
    @include('layouts.nav')
    <div id="index">
        <div class="ui grid">
            <div class="three wide column">
                @include('layouts.left')
            </div>
            <div class="thirteen wide column">
                <div class="ui top attached tabular menu">
                    <a class="item active" data-tab="home"><i class="home icon"></i> 我的主页</a>
                    {{--<a class="item" data-tab="second">Second</a>--}}
                    {{--<a class="item" data-tab="third">Third</a>--}}
                </div>
                <div class="ui bottom attached tab segment active" data-tab="home">
                    <div class="ui stackable two column grid">
                        <div class="column">
                            <h5 class="ui top attached header"><small><i class="large doctor icon"></i></small> 员工去向</h5>
                            <div class="ui attached segment">
                                <table class="ui selectable celled very compact table">
                                    <thead>
                                        <tr>
                                            <th>开始时间</th>
                                            <th>结束时间</th>
                                            <th>类型</th>
                                            <th>去向说明</th>
                                            <th>外出人</th>
                                            <th>所在部门</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2018-08-25</td>
                                            <td>2018-08-26</td>
                                            <td>外出</td>
                                            <td>1231</td>
                                            <td>王晓丹</td>
                                            <td>综合办公室</td>
                                        </tr>
                                        <tr>
                                            <td>2018-08-25</td>
                                            <td>2018-08-26</td>
                                            <td>外出</td>
                                            <td>1231</td>
                                            <td>王晓丹</td>
                                            <td>综合办公室</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="column">
                            <h5 class="ui top attached header"><small><i class="large edit icon"></i></small>  我的任务</h5>
                            <div class="ui attached segment">
                                <table class="ui selectable celled very compact table">
                                    <thead>
                                        <tr>
                                            <th>截止时间</th>
                                            <th>任务标题</th>
                                            <th>状态</th>
                                            <th>发布人</th>
                                            <th>发布时间</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2018-08-25</td>
                                            <td>2018-08-26</td>
                                            <td>外出</td>
                                            <td>1231</td>
                                            <td>王晓丹</td>
                                        </tr>
                                        <tr>
                                            <td>2018-08-25</td>
                                            <td>2018-08-26</td>
                                            <td>外出</td>
                                            <td>1231</td>
                                            <td>王晓丹</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="ui stackable two column grid">
                        <div class="column">
                            <h5 class="ui top attached header"><small><i class="large volume up icon"></i></small> 通知公告</h5>
                            <div class="ui attached segment">
                                <table class="ui selectable celled very compact table">
                                    <thead>
                                        <tr>
                                            <th>通知标题</th>
                                            <th>截止日期</th>
                                            <th>发布人</th>
                                            <th>发布时间</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2018-08-25</td>
                                            <td>2018-08-26</td>
                                            <td>外出</td>
                                            <td>1231</td>
                                        </tr>
                                        <tr>
                                            <td>2018-08-25</td>
                                            <td>2018-08-26</td>
                                            <td>外出</td>
                                            <td>1231</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="column">
                            <h5 class="ui top attached header"><small><i class="large wait icon"></i></small>  待跟踪客户</h5>
                            <div class="ui attached segment">
                                <table class="ui selectable celled very compact table">
                                    <thead>
                                        <tr>
                                            <th>客户名称</th>
                                            <th>进度</th>
                                            <th>联系人</th>
                                            <th>手机号码</th>
                                            <th>下次联系</th>
                                            <th>最后更新</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2018-08-25</td>
                                            <td>2018-08-26</td>
                                            <td>外出</td>
                                            <td>1231</td>
                                            <td>王晓丹</td>
                                            <td>王晓丹</td>
                                        </tr>
                                        <tr>
                                            <td>2018-08-25</td>
                                            <td>2018-08-26</td>
                                            <td>外出</td>
                                            <td>1231</td>
                                            <td>王晓丹</td>
                                            <td>王晓丹</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="ui bottom attached tab segment" data-tab="second">Second</div>--}}
                {{--<div class="ui bottom attached tab segment" data-tab="third">Third</div>--}}
            </div>
        </div>
    </div>
@endsection
