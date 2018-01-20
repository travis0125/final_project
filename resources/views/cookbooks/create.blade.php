@extends('layouts.app')

@section('title', '新增食譜')

@section('contents')
    {!! Form::open(['url' => 'cookbooks']) !!}
    @include('cookbooks.form', ['submitButtonText' => '新增'])
    {!! Form::close() !!}
    @include('errors.list')
@stop