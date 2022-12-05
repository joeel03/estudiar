
@extends('layouts.box-app')
 
@section('box-title')
{{ __('Dashboard') }}
@endsection
 
@section('box-content')
   <h2>{{ __('Resources') }}</h2>
   <a href="{{ url('/files') }}">{{ __('Files') }}</a>
@endsection

