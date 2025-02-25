<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container mt-3">
        <h2>Cars Create</h2>
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <label for="email">Name:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter name" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Mobile:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter mobile" name="pswd">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <div class="container p-5 my-5 border">
        <h4>cars create</h4>
        <a href="{{ route('cars.index') }}">back</a>
    </div>
</body>

</html>
