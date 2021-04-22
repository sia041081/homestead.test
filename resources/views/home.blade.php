@extends('layouts.app_ind')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="text-center">
            <h1>Онлайн запись в спортзал</h1>
                <hr>
            <form action="{{route('login')}}" method="post">
                @csrf
                <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="E-mail">
                <br>
                <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                <hr>
                <div class="col-12">
                    <a href="{{route('registration')}}" class="btn btn-primary">Регистрация</a>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </div>

            </form>
            </div>
        </div>
    </div>
</div>

@endsection
