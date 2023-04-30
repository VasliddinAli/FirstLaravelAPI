<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                    <li><a class="nav-link px-2 text-white"></a></li>
                </ul>

                <div class="text-end">
                    <a href="/api/posts" class="btn btn-warning">Go API</a>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        <h3 class="text-center mt-3">My First Laravel API</h3>
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Runner functions
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Get items <mark>API/</mark></li>
                <li class="list-group-item">Get one item by key <mark>API/{key}</mark></li>
                <li class="list-group-item">Add item <mark>API/{key}</mark></li>
                <li class="list-group-item">Update item <mark>API/{key}</mark></li>
                <li class="list-group-item">Delete item <mark>API/{key}</mark></li>
            </ul>
        </div>
        <h1 class="text-center" >API keys</h1>
        <p  class="text-center" style="font-family: monospace;">title</p>
        <p  class="text-center" style="font-family: monospace;">description</p>
    </main>

</body>

</html>