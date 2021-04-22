@extends('layouts.admin')
@section('content')
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

@endsection
