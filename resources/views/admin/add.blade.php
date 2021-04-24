@extends('layouts.admin')
@section('content')
    <form action="{{'/edit_abb'}}" method="post">
        @csrf
        <div style="margin: 20px;">
            <label for="addAbonement">Название</label>
        <input type="text" name="addAbonement">
            <br>
            <br>
            <label for="abPrice">Цена</label>
        <input type="number" min="0.00" max="10000.00" step="0.01" name="abPrice">
            <br>
            <br>
            <label for="addDate">Срок</label>
        <input type="number" min="1" max="12" name="addDate"><span>мес</span>
            <br>
        <button type="submit" class="btn btn-primary" style="margin: 20px">Сохранить</button>
        </div>
    </form>
@endsection
