<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Calculator</title>
</head>
<body>


    <div class="container">

        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Calculator</h1>
            </div>
            <div class="card-body text-center">
                <form method="POST" attribute="post" action="#">
                    <p>First Value:<br/>
                        <input type="text" id="first" name="first"></p>
                    <p>Second Value:<br/>
                        <input type="text" id="second" name="second"> </p> </br>
                        <select class="form-select form-select-sm mb-3" name="btn" id="btn">
                            <option selected>Open this select menu</option>
                            <option value="+" name="btn" id="add">+</option>
                            <option value="-" name="btn" id="subtract">-</option>
                            <option value="*" name="btn" id="times">*</option>
                            <option value="/" name="btn" id="divide">/</option>
                        </select>
                        <!-- <input type="radio" name="btn" id="add" value="+" checked="true"><p>+</p>
                         <input type="radio" name="btn" id="subtract" value="-"><p>-</p>
                         <input type="radio" name="btn" id="times" value="*"><p>x</p>
                         <input type="radio" name="btn" id="divide" value="/"><p>/</p>
                         <p></p>-->
                        <input class="btn btn-primary" type="submit" name="answer" id="answer" value="Calculate">
                </form>
                <?php
                if($_POST){
                    if($_POST['btn'] == '+') {
                        //echo "$first + $second";
                        echo '<div class="alert alert-success"> ' . $_POST["first"] + $_POST['second'] . '</div>';
                    }
                    else if($_POST['btn'] == "-") {
                        echo '<div class="alert alert-success"> ' . $_POST["first"] - $_POST['second'] . '</div>';
                    }
                    else if($_POST['btn'] == "*") {
                        echo '<div class="alert alert-success"> ' . $_POST["first"] * $_POST['second'] . '</div>';
                    }
                    else if($_POST['btn'] == "/") {
                        echo '<div class="alert alert-success"> ' . $_POST["first"] / $_POST['second'] . '</div>';
                    }
                };
                ?>
            </div>
        </div>
    </div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>