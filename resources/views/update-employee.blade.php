<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
</head>

<body>
    <h1>Update Employees</h1>
    <form action="/update-employee/{{ $emp->id }}" method="post">
        @csrf
        <div>
            <input type="text" name="name" value="{{ $emp->name }}" placeholder="Enter name">
        </div>
        <br>
        <div>
            <input type="email" name="email" value="{{ $emp->email }}" placeholder="Enter email">
        </div>
        <br>
        <div>
            <input type="number" name="phone" value="{{ $emp->phone }}" placeholder="Enter Phone">
        </div>
        <br>
        <div>
            <button>Update</button>
        </div>
    </form>
</body>

</html>
