    <?php
    session_start();
    include 'layout/header.php';

        if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST))
        {
            header('location:Review.php');
        }

    ?>
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h1 class="text-primary text-center"> Phone Number</h1>
            </div>
            <div class="card-body text-center">
                <form method="POST" attribute="post" action="#">
                    <div class="col-sm-10 offset-sm-1">
                        <div class="col-12 text-center text-dark"><br>
                            <h3
                        </div>
                        <div class="form-group">
                            <label for="num" class="offset-md-12">Enter Phone Number</label><br>
                            <input type="number" name="number" id="number" class="form-control col-md-4 offset-md-4">
                        </div>
                        <button type="submit" class="btn btn-primary offset-md-12">Apply</button><br><br>
                        <?php
                        if($_POST){
                            $_SESSION['phone'] = $_POST['number'];
                        } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include 'layout/footer.php'; ?>