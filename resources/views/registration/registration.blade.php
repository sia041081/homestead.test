@extends('layouts.app_ind')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="text-center">
                    <h1>Онлайн запись в спортзал</h1>
                    <br>
                    <hr>
                    <h2>РЕГИСТРАЦИЯ</h2>
                    <hr>
                    <form action="{{route('user.register')}}" method="post">
                        @csrf
                        <input type="hidden" name="token" value="{{Str::random(32)}}">
                        <input type="hidden" name="role" value="0">
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Имя">
                        <br>
                        <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Телефон">
                        <br>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="E-mail">
                        <br>
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                        <hr>
                        <div class="col-12">

                            <button type="submit" class="btn btn-primary">Регистрация</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
