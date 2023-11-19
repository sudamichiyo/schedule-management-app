@extends('schedule/layout')
@section('title', 'スケジュール登録')
@section('content')
@include('schedule/form', ['target' => 'store'])
@endsection
