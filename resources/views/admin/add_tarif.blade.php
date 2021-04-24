@extends('layouts.admin')
@section('content')
<form action="{{'/edit_tar'}}" method="post">
    @csrf
    <div style="margin: 20px;">
        <label for="addTarif">Название тарифа</label>
        <input type="text" name="addTarif">
        <br>
        <br>
        <label for="addPercent">Процент скидки</label>
        <input type="text" name="addPercent">
        <br>
        <br>
        <label for="trPrice">Цена со скидкой</label>
        <input type="number" min="0.00" max="10000.00" step="0.01" name="trPrice">
        <br>
        <button type="submit" class="btn btn-primary" style="margin: 20px">Сохранить</button>
    </div>
</form>
@endsection

