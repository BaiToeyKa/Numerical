<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Numerical Method</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="main">
            <nav class="navbar navbar-expand-sm bg-success navbar-dark">
            
            <!-- Brand -->
            <a class="navbar-brand" href="#">NUMERICAL METHOD</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        ROOTS OF EQUATIONS
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Bisection Method</a>
                        <a class="dropdown-item" href="#">False-Position Method</a>
                        <a class="dropdown-item" href="#">Simple One-Point Iteration</a>
                        <a class="dropdown-item" href="#">Secant Method</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        SOLUTION OF LINEAR ALGEBRAIC EQUATIONS
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Cramer's Rule</a>
                        <a class="dropdown-item" href="#">Gauss Elimination</a>
                        <a class="dropdown-item" href="#">Gauss Jordan</a>
                        <a class="dropdown-item" href="#">LU Decomposition</a>
                        <a class="dropdown-item" href="#">Cholesky Decomposition</a>
                        <a class="dropdown-item" href="#">Jacobi Iteration</a>
                        <a class="dropdown-item" href="#">Conjugate Gradient</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        INTERPOLATION
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Newton's Divided-Difference</a>
                        <a class="dropdown-item" href="#">Lagrang</a>
                        <a class="dropdown-item" href="#">Spline</a>
                    </div>
                </li>
            </ul>
            </nav>
        </div>

        <div class mt-2>
            <div class="shadow px-3 py-3 main col-10 h-100 rounded mx-auto" style="background-color:#f1f1f1">
                <h4 style="text-align: center">ROOTS OF EQUATIONS</h4>
                <div class="row">
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="bisection.blade.php" id="card-link">Bisection Method</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark  bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="False-Position.blade.php" id="card-link">False-Position Method</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark  bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="One-Point.blade.php" id="card-link">Simple One-Point Iteration</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark  bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="Secant.blade.php" id="card-link">Secant Method</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class mt-2>
            <div class="shadow px-3 py-3 main col-10 h-100 rounded mx-auto" style="background-color:#f1f1f1">
                <h4 style="text-align: center">SOLUTION OF LINEAR ALGEBRAIC EQUATIONS</h4>
                <div class="row">
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="bisection.blade.php" id="card-link">Cramer's Rule</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark  bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="False-Position.blade.php" id="card-link">Gauss Elimination</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark  bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="One-Point.blade.php" id="card-link">Gauss Jordan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark  bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="Secant.blade.php" id="card-link">LU Decomposition</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark  bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="Secant.blade.php" id="card-link">Cholesky Decomposition</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark  bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="Secant.blade.php" id="card-link">Jacobi Iteration</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark  bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="Secant.blade.php" id="card-link">Conjugate Gradient</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class mt-2>
            <div class="shadow px-3 py-3 main col-10 h-100 rounded mx-auto" style="background-color:#f1f1f1">
                <h4 style="text-align: center"> INTERPOLATION</h4>
                <div class="row">
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="bisection.blade.php" id="card-link">Bisection Method</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark  bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="False-Position.blade.php" id="card-link">False-Position Method</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark  bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="One-Point.blade.php" id="card-link">Simple One-Point Iteration</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="shadow card rounded border border-dark  bg-success" id="card">
                            <div class="card-body mx-auto">
                                <a class="text-white" href="Secant.blade.php" id="card-link">Secant Method</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <?php
            
        ?>

    </body>
</html>