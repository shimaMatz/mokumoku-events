@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('event.create') }}" method="POST">
        @csrf
        {{-- タイトルフォーム --}}
        <div class="form-group">
            <label for="title">{{ 'タイトル' }}<span class="badge bg-danger mx-2">{{ '必須' }}</span></label>
            <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title"
                id="title" value="{{ old('title') }}">
            @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                {{ $errors->first('title') }}
            </span>
            @endif
        </div>
        {{-- カテゴリープルダウン --}}
        <div class="mb-3 w-50">
            <label class="form-label" for="category-id">{{ 'カテゴリー' }}<span class="badge bg-danger mx-2">{{ '必須'
                    }}</span></label>
            <select class="form-control" id="category-id" name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>
        {{-- 開催日をカレンダーで選択 --}}
        <div class="mb-3 w-25">
            <label class="form-label" for="date">{{ '開催日' }}<span class="badge bg-danger mx-2">{{ '必須' }}</span></label>
            <input type="date" class="form-control" name="date" id="date">
        </div>
        {{-- もくもく会開催時間 --}}
        <div class="mb-3 w-50">
            <div class="row">
                {{-- 開始時間 --}}
                <div class="col">
                    <label class="form-label" for="start_time">{{ '開始時間' }}<span class="badge bg-danger mx-2">{{ '必須'
                            }}</span></label>
                    <input type="time" class="form-control" name="start_time" id="start_time">
                </div>
                {{-- 終了時間 --}}
                <div class="col">
                    <label class="form-label" for="end_time">{{ '終了時間' }}<span class="badge bg-danger mx-2">{{ '必須'
                            }}</span></label>
                    <input type="time" class="form-control" name="end_time" id="end_time">
                </div>
            </div>
        </div>
        {{-- 参加費フォーム --}}
        <div class="mb-3 w-25">
            <label class="form-label" for="entry-fee">{{ '参加費' }}<span class="badge bg-danger mx-2">{{ '必須'
                    }}</span></label>
            <input type="text" class="form-control" name="entry_fee" id="entry-fee">
        </div>
        {{-- もくもく会の詳細 --}}
        <div class="mb-3">
            <label class="form-label" for="content">{{ '詳細' }}<span class="badge bg-danger mx-2">{{ '必須'
                    }}</span></label>
            <textarea class="form-control" name="content" id="content" rows="10"
                placeholder="もくもく会の詳細を記載してください。"></textarea>
        </div>
        <button type="submit" class="btn btn-success w-100">
            {{ 'もくもく会を開催する' }}
        </button>
    </form>
</div>
@endsection