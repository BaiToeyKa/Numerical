<!DOCTYPE html>
<html lang="en" dir="ltr">
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
            <a class="navbar-brand" href="homepage">NUMERICAL METHOD</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        ROOTS OF EQUATIONS
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="Bisection">Bisection Method</a>
                        <a class="dropdown-item" href="FalsePosition">False-Position Method</a>
                        <a class="dropdown-item" href="OnePointIteration">Simple One-Point Iteration</a>
                        <a class="dropdown-item" href="NewtonRarpson">Newton-Ralphson Method</a>
                        <a class="dropdown-item" href="#">Secant Method</a>
                    </div>
                </li>
                <!-- <li class="nav-item dropdown">
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
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        INTERPOLATION
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Newton's Divided-Difference</a>
                        <a class="dropdown-item" href="#">Lagrange Polynomials</a>
                        <a class="dropdown-item" href="#">Spline Interpolation</a>
                    </div>
                </li>
            </ul>
            </nav>
        </div>
    </body>
    @yield('body')
    <br>
    <br>
    <br>
    <footer class="w3-container bg-success" style="padding:32px " >
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>About As...</h3>
                    <hr style="border-color: black">
                    <p>Submitted by &nbsp :: &nbsp &nbspMiss Wisanlaya &nbsp Kongthanajirapaisarn</p>
                    <p> &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 5904062636398</p>
                    <p> Present to &nbsp &nbsp &nbsp ::&nbsp &nbsp Suwatchai Kamonsantiroj &nbsp &nbsp, &nbsp &nbspPh.D.</p>
                </div>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <h3>About As...</h3>
                    <hr style="border-color: black">
                    <p>&nbsp &nbspThe website is a part of Numerical Method Subject</p>
                    <p>&nbsp &nbspDepartment of Computer and Information Science ,</p>
                    <p>&nbsp &nbspFaculty of Applied Science , King Mongkut's </p>
                    <p>&nbsp &nbspUniversity of Technology North Bangkok</p>
                </div>
            </div>
        </div>
    </footer>
</html>
