@extends('layouts.app')

@section('content')
<div>
    <h1>This is User form page</h1>

    <form action="{{ url('/add-user') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="username" placeholder="Enter name">
            @error("username")
            <p style="color: red;">{{$message}}</p>
            @enderror
        </div>

        <div>
            <input type="email" name="email" placeholder="Enter Email">
            @error('email')
            <p style="color: red;">{{$message}}</p>
            @enderror
        </div>

        <div>
            <input type="text" name="phone" placeholder="Enter Phone">
        </div>
        <div>
            <input type="date" name="dob">
        </div>
        <div>
            <label for="gender">Gender</label>
            <div>
                <input type="radio" name="gender" value="male"> <span>Male</span>
            </div>
            <div>
                <input type="radio" name="gender" value="female"> <span>Female</span>
            </div>
        </div>
        <div>
            <label>Skills</label>
            <div>
                <input type="checkbox" name="skills[]" value="react"><span>React</span>
            </div>
            <div>
                <input type="checkbox" name="skills[]" value="laravel"><span>Laravel</span>
            </div>
        </div>
        <div>
            <label>City</label>
            <div>
                <select name="city">
                    <option value="">Select City</option>
                    <option value="dhaka">Dhaka</option>
                    <option value="vatara">Vatara</option>
                </select>
            </div>
        </div>
        <div>
            <textarea name="bio" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="range" name="age" min=18 max=100>
        </div>

        <div>
            <button type="submit">Add New User</button>
        </div>

    </form>
</div>
@endsection