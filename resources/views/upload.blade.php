<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>

<body>

    <h1>Image upload</h1>
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div><input type="file" name="file"></div>

            <br>
            <div>
                <button>Upload</button>
            </div>
        </form>
    </div>

</body>

</html>
