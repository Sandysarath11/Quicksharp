<?php
/*
 * User: Sarathkumar
 * Date: 16/07/2024
 * Time: 09:41 AM
 */
?>
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="border rounded">
        <div class="text-center mt-4">
            <img src="{{ asset(Auth::user()->logo) }}" class="rounded-circle" alt="" width="100" height="100">
        </div>
        <div class="mt-2">
            <label for="">Name: {{ Auth::user()->name }}</label>
        </div>
    </div>
</div>

@endsection
