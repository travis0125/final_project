@extends('layouts.app')

@section('title', '編輯食譜資料')

@section('contents')
    {!! Form::model($cookbook, ['method'=>'PATCH','action'=>['CookbooksController@update', $cookbook->id]]) !!}
    @include('cookbooks.form', ['submitButtonText' => '更新資料'])
    {!! Form::close() !!}
    @include('errors.list')
@stop