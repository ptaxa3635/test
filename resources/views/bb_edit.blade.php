@extends('layouts.base')

@section('title', 'Правка сообщения :: Мои Сообщения')

@section('main')
<form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="txtTitle">Тема сообщения</label>
        <input name="title" id="txtTitle"
               class="form-control @error('title') is-invalid @enderror"
               value="{{ old('title', $bb->title) }}">
        @error('title')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="txtContent">Текст сообщения</label>
        <textarea name="content" id="txtContent"
                  class="form-control @error('content') is-invalid @enderror"
                  row="3">{{ old('content', $bb->content) }}</textarea>
        @error('content')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <input type="submit" class="btn btn-primary" value="Сохранить">
</form>
@endsection

 