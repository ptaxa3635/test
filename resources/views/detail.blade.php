@extends('layouts.base')
@section('title', $bb->title)
@section('main')
    <h2>{{ $bb->title }}</h2>
        <p>{{ $bb->content }}</p>
        <p>Автор: {{$bb->user->name}}</p>
        @endsection('main')
        