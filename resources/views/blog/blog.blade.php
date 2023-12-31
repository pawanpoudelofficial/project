<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Blog Website</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Damak Model Campus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Add Blog</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <h1>Create Blog !!</h1>

    <form action="/save" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form">
            <div class="card p-4">
                <div class="form-control">
                    <label for="">Title</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="form-control">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-control">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-control">
                    <label for="">Author</label>
                    <input type="text" name="author" class="form-control">
                </div>
                <div class="form-control">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>