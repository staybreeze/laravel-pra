<!-- resources/views/child.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Page Title1234')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    <p>This is my body content.</p>
@endsection