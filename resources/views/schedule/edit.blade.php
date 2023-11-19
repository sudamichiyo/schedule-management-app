@extends('schedule/layout')
@section('title', 'スケジュール編集')
@section('content')
@include('schedule/form', ['target' => 'update'])
@endsection
