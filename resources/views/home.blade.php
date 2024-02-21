<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'My Portfolio')

@section('content')
<div class="home-top-container">
    <div class="home-left-container">
        <!-- Content for the left column -->
        <h1 class="home-heading">Full-Stack Software Developer</h1>
        <p class="home-paragraph1">From frontend finesse to backend brilliance, I've got you covered</p>
        <hr class="home-separator">
        <p class="home-paragraph2">First Solve The Problem. Then, Write The Code</p>
    </div>
    <div class="home-right-container">
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image">
    </div>
</div>
@endsection