@extends('layouts.default')
@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        <h1>Hello Sample.app</h1>
        <p class="lead">
            你现在看到的是<a href="#">Laravel</a>的示例项目主页。
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
        </p>
    </div>
@stop