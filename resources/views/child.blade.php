{{-- This comment will not be present in the rendered HTML --}}

@extends('layouts.master')

@section('title', 'Hello Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content. @{{ name }} {{ microtime(true) }} {{ $name1 or 'Default'  }}</p>

    @if (count($records) === 1)
        records is 1
    @elseif (count($records) > 1)
        records is > 1
    @else
        records is < 1
    @endif

    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }} <br/>
    @endfor




@endsection


<?php #echo with($time1)->format('m/d/Y H:i'); ?>

@include('errors', ['some' => 'data'])

@section('content', 'hello body')


