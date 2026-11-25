<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Employees</title>
</head>

<body>
    <h1>Employee List</h1>

    <a href="add-employee">Add Employee</a>

    <br>
    <br>
    <div>
        <form action="/search-employee" method="get">
            <input type="text" name="search-name" placeholder="Search name">
            <button>Search</button>
        </form>
    </div>

    @foreach ($employees as $emp)
        <div style="border: 1px solid #0a0a0a; margin: 20px; padding: 20px;">
            <div>
                <p>{{ $emp->name }}</p>
                <p>{{ $emp->email }}</p>
                <p>{{ $emp->phone }}</p>
            </div>
            <div>
                <a href="delete-employee/{{ $emp->id }}">Delete</a>
                <a href="update-employee/{{ $emp->id }}">Update</a>
            </div>
        </div>
    @endforeach
    <div>
        <p>{{ $employees->links() }}</p>
    </div>
</body>

</html>
