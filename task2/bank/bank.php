<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <div class="container">

        <div class="card">
            <div class="card-header">
                <h1 class="text-center text-primary">Bank</h1>
            </div>
            <div class="card-body text-center">
                <form action="" method="post" class="mx-5">
                    <div class="col-sm-10 offset-sm-1 ">
                        <div class="form-group">
                            <label for="name"><h6> Name </h6></label><br>
                            <input type="text" name="name" id="name" value="<?php if($_POST) {echo $_POST['name']; } ?>" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label for="loan"><h6> Loan Amount </h6></label><br>
                            <input type="number" name="loans" id="loan" value="<?php if($_POST) {echo $_POST['loans']; } ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="loan"><h6>Loan Years </h6></label><br>
                            <input type="number" name="years" id="years" value="<?php if($_POST) {echo $_POST['years']; } ?>" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary container-fluid">Apply</button><br><br>
                        </div>

                        <?php
                        if($_POST)
                        {
                        if($_POST['years'] <= 3)
                        {
                            $interest_rate = 0.1 * $_POST['loans'] * $_POST['years'];
                        }
                        else
                        {
                            $interest_rate = 0.15 * $_POST['loans'] * $_POST['years'];
                        }
                        $loan_after = $_POST['loans'] + $interest_rate;
                        $monthly    = $loan_after / (12 * $_POST['years'])

                        ?>

                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr class="text-center">
                                <th> Username </th>
                                <th> Interest Rate </th>
                                <th> Loan After Rate </th>
                                <th> Monthly </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-center">
                                <td>
                                    <?php echo $_POST['name']; ?>
                                </td>
                                <td>
                                    <?php echo $interest_rate ?>
                                </td>
                                <td>
                                    <?php echo $loan_after ?>
                                </td>
                                <td>
                                    <?php echo $monthly ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>