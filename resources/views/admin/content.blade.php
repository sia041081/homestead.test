@extends('layouts.admin')
@section('content')
    @dd($user)
    @if ($request->token = \App\Models\Users::where('role', '=', 1)->first())
    <h3 class="text-black-50">
        Пользователи
    </h3>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Имя</th>
            <th scope="col">Email</th>
            <th scope="col">Телефон</th>
            <th scope="col">Роль</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $users)
            <tr>
                <th scope="row">{{$users['user_name']}}</th>
                <td>{{$users['email']}}</td>
                <td>{{$users['telephone']}}</td>
                <td>@if($users['role'])
                        <?php echo 'админ'?>
                    @else
                        <?php echo 'не админ'?>
                    @endif
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <hr>
    <div class="abonement">
    <h3 class="text-black-50">
        Тарифы и абонементы
    </h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Абонемент</th>
                <th scope="col">Срок</th>
                <th scope="col">Цена</th>
            </tr>
            </thead>
            <tbody>
            @foreach($abonement as $abonn)

            <tr>
                <th scope="row">{{$abonn['name_abonement']}}</th>
                <td>{{$abonn['period']}} мес.</td>
                <td>{{$abonn['price']}} $</td>
            </tr>

            @endforeach
            </tbody>
        </table>
       <b>тарифы</b>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Тариф</th>
                <th scope="col">Процент</th>
                <th scope="col">Цена</th>
                <th scope="col">Срок</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tarif as $tar)

                <tr>
                    <th scope="row">{{$tar['name_tarif']}}</th>
                    <td>{{$tar['percent']}}</td>
                    <td>{{$tar['price']}} $</td>
                    <td>1 год</td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
    @else
        <h3>Страницу могу просматривать только пользователи с парвами администратор</h3>
    @endif
@endsection
