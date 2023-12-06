<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: url('https://img.freepik.com/free-vector/abstract-geometric-wireframe-background_52683-59421.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-blur: 10px;
        }

        .carousel-inner {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .carousel-item {
            flex: 0 0 100%;
            max-width: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px;
        }

        .card {
            animation: fadeInUp 1s;
        }
    </style>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.php">shark proj</a>
    </nav>
    <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center align-items-center" style="height: 100vh;">
                    <div class="col-md-6">
                        <div class="card bg-light text-dark border-0 animate__animated animate__fadeIn">
                            <div class="card-body text-center">
                                <h1 class="card-title">Welcome</h1>
                                <p class="card-text">Home</p>
                            </div>
                            <div class="card-footer bg-transparent text-center">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card bg-success text-white">
                                            <div class="card-body">Not Registered Yet</div>
                                            <div class="card-footer">
                                                <a class="small text-white stretched-link" href="signup.php">Signup Here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card bg-info text-white">
                                            <div class="card-body">Already Registered</div>
                                            <div class="card-footer">
                                                <a class="small text-white stretched-link" href="login.php">Login Here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card bg-danger text-white">
                                            <div class="card-body">Admin Panel</div>
                                            <div class="card-footer">
                                                <a class="small text-white stretched-link" href="admin">Login Here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more carousel items if needed -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
