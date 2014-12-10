@extends('layouts.main')

@section('sidebar')
    {!! $sidebar !!}
@stop

@section('main')
    {!! $main !!}
@stop

@section('bodyend')
    @if(isset($bodyend))
        {!! $bodyend !!}
    @endif
@stop