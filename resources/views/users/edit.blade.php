@extends('layouts.default')
@section('title', '编辑个人资料')

@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>更新个人资料</h5>
        </div>
        <div class="panel-body">
            @include('shared._errors')

            <div class="gravatar_eidt">
                <a href="http://gravatar.com/emails" target="_blank">
                    <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar">
                </a>
            </div>

            <form method="post" action="{{ route('users.update', $user->id) }}">
                {{ method_field('PATCH') }}
                {{csrf_field()}}

                <div class="form-group">
                    <label for="name">name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}"/>
                </div>

                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled/>
                </div>

                <div class="form-group">
                    <label for="password">password:</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}"/>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">password_confirmation:</label>
                    <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}"/>
                </div>

                <button type="submit" class="btn btn-primary">更新</button>
            </form>
        </div>
    </div>
</div>
@stop