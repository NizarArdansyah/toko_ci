<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/styles/css/bootstrap.min.css">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><b>Toko-CI</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/home/produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/user">User</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-2 sticky-top">
                <ul class="list-group">
                    <p><b>Pilih kategori</b></p>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="text-decoration-none" href="">baju</a>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="text-decoration-none" href="">celana</a>
                        <span class="badge bg-primary rounded-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="text-decoration-none" href="">sepatu</a>
                        <span class="badge bg-primary rounded-pill">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="text-decoration-none" href="">sandal</a>
                        <span class="badge bg-primary rounded-pill">1</span>
                    </li>
                </ul>


            </div>
            <div class="col-10">
                <div class="d-flex flex-wrap">
                    <?php for ($i = 0; $i < 10; $i++) : ?>


                        <div class="card mb-3 w-25 m-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <small class="card-text">Some quick example text to build on the card title....</small>
                            </div>
                            <div class="card-body d-flex justify-content-end">
                                <button class="btn-light badge p-2 text-black m-1">
                                    <i class="bi bi-three-dots"></i> Detail
                                </button>
                                <button class="btn-primary badge px-3 py-2 m-1">
                                    <i class="bi bi-bag-check-fill"></i> Beli
                                </button>
                            </div>
                        </div>
                    <?php endfor; ?>

                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>