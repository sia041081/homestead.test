@extends('layouts.app_ind')
@section('content')

@if (\App\Models\Users::where('role', 1)->where('email', '=', $request->input('inputEmail'))->get())
    <div class="container">
        <a href="admin" class="btn btn-danger">adminka</a>
    </div>
@endif
    <br>

    <div class="container">
        <h2>Ваши подписки</h2>
    </div>
    <div class="container text-center">

        <h2>Выберете абонемент</h2>
        <hr>
    </div>

    <div class="container">
        <b>Абоненменты:</b>
        @foreach($abonement as $abonn)

            <ul>
                <li style="list-style-type: none;">
                    {{$abonn['name_abonement']}} Цена: {{$abonn['price']}} $
                    <br>
                    {{$abonn['name_abonement']}} &nbsp;<button class="btn btn-primary" onclick="document.location='{{'/login'}}'">Подписаться</button>
                        <input type="hidden" value="{{$abonn['price']}}"></a>
                </li>

            </ul>
        @endforeach
        <hr>
        <h2>Выберете тариф</h2>
        <b>Тарифы:</b>
        @foreach($tarif as $item)
            <ul>
                <li style="list-style-type: none;">
                    {{$item['name_tarif']}} Цена: {{$item['price']}} $
                    <br>
                    {{$item['name_tarif']}}&nbsp;<button class="btn btn-primary" onclick="document.location='{{'/login'}}'">Подписаться</button>
                    <input type="hidden" value="{{$item['price']}}">
                </li>
            </ul>
        @endforeach
        <hr>

    </div>
@endsection
