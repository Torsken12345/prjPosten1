<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./resources/css/site.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Timeplan</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="resources\images\logoPosten.webp" width="300" height="" class="d-inline-block align-center" alt="">  
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Kalender <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                </ul>
            </div>
        </nav>  
    </header>
        <?php
            $dbhost = 'localhost';
            $dbuser = 'martin';
            $dbpass = 'password';
            $dbname = 'test';
            $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
            
            if($mysqli->connect_errno ) {
                printf("Connect failed: %s<br />", $mysqli->connect_error);
                exit();
            }
    
            $sql = "SELECT * FROM shifts";          

            $sqlQueryResult = $mysqli->query($sql);
        ?>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    if ($sqlQueryResult->num_rows > 0) {
                        while($row = $sqlQueryResult->fetch_assoc()) {
                ?>

                <tr>

                    <?php
                        echo "<td class='kalenderSide'>";
                        echo $row["shiftId"];
                        echo "</td>";
                        
                        echo "<td class='kalenderSide'>";
                        echo $row["shiftStart"];
                        echo "</td>";
                            
                        echo "<td class='kalenderSide'>";
                        echo $row["shiftEnd"];
                        echo "</td>";
                    ?>
                    
                </tr>

                <?php
                        }
                    } else {
                        printf('No record found.<br />');
                    }
                    mysqli_free_result($result);
                    $mysqli->close();
                ?>
                </tbody>
        </table>
    </main>

</body>
</html>