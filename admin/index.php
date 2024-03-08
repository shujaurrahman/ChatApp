<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
            margin: 0;
        }

        form {
            max-width: 500px;
            width: 100%;
            border: 1px solid #ccc; /* Add border style */
            padding: 60px 50px; /* Add padding for better appearance */
            border-radius: 10px; /* Add border-radius for rounded corners */
        }

    </style>
</head>

<body >
    <nav class="bg-body-tertiary">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="#"><button type="button" class="btn btn-outline-dark">Homepage</button></a>
            </li>
        </ul>
    </nav>
    <div class="form-section ">
        <form>
            <p class="h4">Admin Login</p>
            <br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="button" class="btn btn-outline-dark">Login</button>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>
