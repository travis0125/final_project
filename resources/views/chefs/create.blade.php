@extends('layouts.app')

@section('title', '新增廚師')

@section('contents')
    {!! Form::open(['url' => 'chefs']) !!}
    @include('chefs.form', ['submitButtonText' => '新增'])
    {!! Form::close() !!}
    @include('errors.list')
@stop