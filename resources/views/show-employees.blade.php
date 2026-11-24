<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Employees</title>
</head>

<body>
    <h1>Employee List</h1>
    @foreach($employees as $emp)
    <div style="border: 1px solid #0a0a0a; margin: 20px; padding: 20px;">
        <p>{{ $emp->name }}</p>
        <p>{{ $emp->email }}</p>
        <p>{{ $emp->phone }}</p>
    </div>
    @endforeach
</body>

</html>