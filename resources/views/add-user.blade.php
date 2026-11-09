@extends('layouts.app')

@section('content')
<div>
    <h1>This is User form page</h1>

    <form action="{{ url('/add-user') }}" method="POST">
        @csrf

        <input type="text" name="username" placeholder="Enter name">

        <input type="email" name="email" placeholder="Enter Email">

        <input type="text" name="phone" placeholder="Enter Phone">

        <button type="submit">Add New User</button>
    </form>
</div>
@endsection