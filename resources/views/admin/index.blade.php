@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.nav')
    <div id="index">
        <div class="ui grid">
            <div class="three wide column">
                @include('admin.layouts.left')
            </div>
            <div class="thirteen wide column">
                <div class="ui breadcrumb">
                    <a href="" class="section"><i class="home icon"></i></a>
                    <div class="divider"> / </div>
                    <a href="" class="section">首页</a>
                </div>
            </div>
        </div>
    </div>
@endsection
