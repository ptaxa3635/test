@extends('layouts.base')

@section('title', 'Добавить запись :: Мои записи')

@section('main')
<form action="{{ route('bb.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="txtTitle">Тема сообщения</label>
        <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
        @error('title')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="txtContent">Текс сообщения</label>
        <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror" row="3">{{ old('content') }}</textarea>
        @error('content')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
        <input type="submit" class="btn btn-primary" value="Добавить">
</form>
@endsection

 