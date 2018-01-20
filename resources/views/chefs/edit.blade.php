@extends('layouts.app')

@section('title', '編輯廚師資料')

@section('contents')
    {!! Form::model($chef, ['method'=>'PATCH','action'=>['ChefsController@update', $chef->id]]) !!}
    @include('chefs.form', ['submitButtonText' => '更新資料'])
    {!! Form::close() !!}
    @include('errors.list')
@stop