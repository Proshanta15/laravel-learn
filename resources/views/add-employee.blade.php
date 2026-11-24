<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>

<body>
    <h1>Add Employees</h1>
    <form action="add-employee" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Enter name">
        </div>
        <br>
        <div>
            <input type="email" name="email" placeholder="Enter email">
        </div>
        <br>
        <div>
            <input type="number" name="phone" placeholder="Enter Phone">
        </div>
        <br>
        <div>
            <button>Add</button>
        </div>
    </form>
</body>

</html>