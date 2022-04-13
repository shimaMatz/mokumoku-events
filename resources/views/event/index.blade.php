@extends('layouts.app')

@section('content')
<style>
    #mokumoku-lists {
        filter: drop-shadow(2px 4px 6px #000);
    }

    .content-filed {
        width: 60%;
    }
</style>
{{-- もくもく会開催一覧リスト --}}
@foreach ($events as $event)
<div class="card container text-center mb-5" id="mokumoku-lists">
    <div class="card-header font-weight-bold bg-white">
        <a href="">{{ $event->title }}</a>
    </div>
    <div class="card-body">
        <div class="category text-start m-2">
            <label for="category-label"><span class="badge bg-primary p-2">{{ $event->category->category_name
                    }}</span></label>
        </div>
        <div class="entry-fee-wrapper d-flex m-2">
            <label for="entry-fee"><span class="badge bg-success p-2">{{ '参加費' }}</span></label>
            <p class="text-danger font-weight-bold p-1 h5">{{ $event->entry_fee.'円' }}</p>
        </div>
        <div class="content-wrapper d-flex ">
            <div class="content-filed">
                <p class="card-text text-start">
                    {{ mb_substr($event->content, 0, 100, 'UTF-8').'...' }}
                </p>
            </div>
            <div class="btn-filed m-auto">
                <button class="btn btn-primary mr-3">{{ '詳細' }}</button>
                <button class="btn btn-info mr-3">{{ '編集' }}</button>
                <button class="btn btn-danger mr-3">{{ '削除' }}</button>
            </div>
        </div>
    </div>
    @php
    // 指定の日付を△△/××に変換する
    $date = date("m/d" ,strtotime($event->date));
    //指定日の曜日を取得する
    $getWeek = date('w', strtotime($event->date));
    //配列を使用し、要素順に(日:0〜土:6)を設定する
    $week = [
    '日', //0
    '月', //1
    '火', //2
    '水', //3
    '木', //4
    '金', //5
    '土', //6
    ];

    // 開始時間 ex.15:00:00→15:00に変換。秒部分を切り捨て
    $start_time = substr($event->start_time, 0, -3);
    // 終了時間 ex.19:00:00→19:00に変換。秒部分を切り捨て
    $end_time = substr($event->end_time, 0, -3);
    @endphp
    <div class="card-footer text-start font-weight-bold bg-white">
        {{ '開催日時:'.$date.'('.$week[$getWeek].')'. $start_time. '-' .$end_time }}
    </div>
</div>
@endforeach
@endsection