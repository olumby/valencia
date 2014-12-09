@extends('layouts.main')

@section('sidebar')
@foreach($sidebar as $item)
    <li>{{ ucwords(basename($item, '.md')) }}</li>
@endforeach

@stop

@section('main')
    {!! $main !!}
@stop