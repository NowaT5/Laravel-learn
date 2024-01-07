@extends('layouts.app')
@section('title', 'หน้าแรกของเว็ปไซต์')

@section('content')
    <h2>บทความล่าสุด</h2>
    <hr>
    @foreach ($blogs as $item)
        <h2>{{$item->title}}</h2>
        <p>{!!Str::limit($item->content,50)!!}</p>
        <a href="/detail/{{$item->id}}">อ่านต่อ</a>
        <hr>
    @endforeach
@endsection