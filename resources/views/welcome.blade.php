@extends('layouts.app')

@section('content')
<div>
    <h1>Welcome to Our Website</h1>
    <p>This is the home page of our Laravel application.</p>

    <ul>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact Us</a></li>
    </ul>

    <x-alert msg="This is an alert message" type="info" />
</div>
@endsection