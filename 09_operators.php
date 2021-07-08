<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>more variable in pHp</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">pHp tutorials</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-5">


        <?php

        //Operators in pHp

        /* 
1. Arithmatics Operators
2. Assignment Operators
3. Comparison operators
4. Logical operators
*/

        $a = 45;
        $b = 50;
        // 1. Arithmatics Operators
        echo "For a + b, the resul is " . ($a + $b) . "<br>";
        echo "For a - b, the resul is " . ($a - $b) . "<br>";
        echo "For a * b, the resul is " . ($a * $b) . "<br>";
        echo "For a / b, the resul is " . ($a / $b) . "<br>";
        echo "For a % b, the resul is " . ($a % $b) . "<br>";
        echo "For a ** b, the resul is " . ($a ** $b) . "<br>";

        // 2. Assignment Operators
        $x = $a;
        echo "For x the value is is " . $x . "<br>";

        // $a += 10;
        // echo "For a +10 the value is is ". $a . "<br>";

        // $a /= 2;
        // echo "For a / 2 the value is is ". $a . "<br>";

        // $a -= 10;
        // echo "For a -10 the value is is ". $a . "<br>";

        // $a *= 10;
        // echo "For a * 10 the value is is ". $a . "<br>";

        // $a %= 10;
        // echo "For a % 10 the value is is ". $a . "<br>";



        // 3. Comparison operators
        $x = 7;
        $y = 5;

        //Equal too
        echo "For x == y, the result is ";
        echo var_dump($x == $y);
        echo "<br>";

        //Greater than
        echo "For x > y, the result is ";
        echo var_dump($x > $y);
        echo "<br>";

        //less than
        echo "For x < y, the result is ";
        echo var_dump($x < $y);
        echo "<br>";

        //Not Equal too
        echo "For x <> y, the result is ";
        echo var_dump($x <> $y);
        echo "<br>";


        // 4. Logical operators

        $m = false;
        $n = true;

        // and and && are same

        echo "For m and n the result is ";
        echo var_dump($m and $n);
        echo "<br>";

        echo "For m && n the result is ";
        echo var_dump($m && $n);
        echo "<br>";

        // or and || are same
        echo "For m or n the result is ";
        echo var_dump($m or $n);
        echo "<br>";

        echo "For m || n the result is ";
        echo var_dump($m || $n);
        echo "<br>";

        // not operators !
        echo "For !m the result is ";
        echo var_dump(!$m);
        echo "<br>";


        ?>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>