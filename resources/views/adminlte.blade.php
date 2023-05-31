@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>ダッシュボード</h1>
@stop

@section('content')
    <p>コンテンツ</p>
@stop

@section('css')
    {{-- ページ毎のCSSの指定 
	<link rel="stylesheet" href="/css/xxx.css"> 
	--}}
@stop

@section('js')
    <script>
        console.log("ページ毎にJSの記述");
    </script>
@stop
