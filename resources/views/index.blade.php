@extends('layouts.base')

@section('title', 'Главная')
@section('title', 'Добавить запись')
@section('title', 'Добавить запись :: Мои записи')
@section('main')
@if (count($bbs) > 0)
<table class="table table-striped">
    <thead>
        
        <tr>
            <th>Тема сообщения</th>
            <th>Сообщение</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bbs as $bb)
        <tr>
            
            <td><h3>{{ $bb->title }}</h3></td>
            <td>{{ $bb->content }}</td>            
            <td>
                <a href="{{ route('detail', ['bb' => $bb->id]) }}">Подробнее…</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection('main')
