@extends('layouts.base')
@section('title', 'Добавить запись :: Мои записи')
@section('title', 'Мои записи')

@section('main')
<h2>Добро пожаловать, {{ Auth::user()->name }}!</h2>
<p class="text-right"><a href="{{ route('bb.add') }}">Добавить запись</a></p>
@if (count($bbs) > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>Тема сообщения</th>
            <th>Текст сообщения</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bbs as $bb)
        <tr>
            <td><h3>{{ $bb->title }}</h3></td>
            
            <td>{{ $bb->content }}</td>
            <td>
                <a href="{{ route('bb.edit', ['bb' => $bb->id]) }}">Изменить</a>
            </td>
            <td>
                <a href="{{ route('bb.delete', ['bb' => $bb->id]) }}">Удалить</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endif
@endsection