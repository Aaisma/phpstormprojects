<php>

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Birth Certificate</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Birth Certificate</a>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggle-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>



        </ul>
    </div>
</nav>

<div class="container mt-4">
    <h3>Please Register Here:</h3>
    <hr>
    <div class="form-group">
        <label for="uname">Baby Name:</label>
        <input type="uname" class="form-control" name ="username" id="user" placeholder=" "><br>
    </div>

    <fieldset>
        <label for="inputprov">Gender:</label>
        <select id="inputprov" class="form-control">
            <option selected> </option>
            <option>Male</option>
            <option>Female</option>
            <option>Others</option>
        </select><br><br>
    </fieldset>


    <label for="uname">Date Of Birth:</label>
    <input type="date" class="form-control" name ="b_day" id="b_day" placeholder=" "><br><br>

    <fieldset>
        <div class="form-group">
            <label for="Father Name">Father Name:</label>
            <input type="Father Name" class="form-control" name ="f_name" id="f_name" placeholder=" ">
        </div>

        <div class="form-group">
            <label for="FatherC">Father Contact:</label>
            <input type="FatherC" class="form-control" name ="fc" id="fc" placeholder=" "><br><br>
        </div>
    </fieldset>

    <fieldset>
        <div class="form-group">
            <label for="Mother Name">Mother Name:</label>
            <input type="Mother Name" class="form-control" name ="m_name" id="m_name" placeholder=" ">
        </div>

        <div class="form-group">
            <label for="MotherC">Mother Contact:</label>
            <input type="MotherC" class="form-control" name ="mc" id="mc" placeholder=" "><br><br>
        </div>
    </fieldset>

    <div class="form-group">
        <fieldset>
            <legend>Permanent address:</legend>
            <div class="form-group col-md-4">
                <label for="inputprov1">Province:</label>
                <select id="inputprov1" class="form-control">
                    <option selected></option>
                    <option>1st pradesh</option>
                    <option>Madhesh Pradesh</option>
                    <option>Bagmati Pradesh</option>
                    <option>Gandaki Pradesh</option>
                    <option>Lumbini Province</option>
                    <option>Karnali Pradesh</option>
                    <option>Sudurpashchim Pradesh</option>
                </select><br>

                <label for="Permanent Address">District:</label>
                <input type="Permanent Address" class="form-control" name ="p_address" id="p_address1" placeholder=" "><br>

                <label for="Permanent  Address">City:</label>
                <input type="Permanent  Address" class="form-control" name ="p_address" id="p_address2" placeholder=" "><br>
        </fieldset>
    </div>

    <div class="form-group">
        <fieldset>
            <legend>Temporary address:</legend>
            <div class="form-group col-md-4">
                <label for="inputprov">Province:</label>
                <select id="inputprov" class="form-control">
                    <option selected></option>
                    <option>1st pradesh</option>
                    <option>Madhesh Pradesh</option>
                    <option>Bagmati Pradesh</option>
                    <option>Gandaki Pradesh</option>
                    <option>Lumbini Province</option>
                    <option>Karnali Pradesh</option>
                    <option>Sudurpashchim Pradesh</option>
                </select><br>

                <label for="Temporary Address">District:</label>
                <input type="Temporary Address" class="form-control" name ="t_address" id="t_address1" placeholder=" "><br>

                <label for="Temporary Address">City:</label>
                <input type="Temporary Address" class="form-control" name ="t_address" id="t_address2" placeholder=" "><br>
        </fieldset>

        <button type="Submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</div>



</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
