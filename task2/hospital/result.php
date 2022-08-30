<?php
session_start();
$questions =
    [
        "Are you satisfied with level of cleanliness ?",
        "Are you satisfied with the service prices ?",
        "Are you satisfied with the nursing service ?",
        "Are you satisfied with the level of doctors ?",
        "Are you satisfied with the calm in the hospital ?"
    ];
$rates =
    [
        "Bad"       => 0,
        "Good"      => 3,
        "Very good" => 5,
        "Excellent" => 10
    ];

$flag1 = 1;
$flag2 = 1;
$score = 0;

?>
<?php include 'layout/header.php'; ?>

    <div class="container">

        <div class="card">
            <div class="card-header">
                <h1 class="text-center text-primary">Results</h1>
            </div>
            <div class="card-body text-center">
                <form action="" method="post" class="border-right-0">
                    <div class="col-sm-12 offset-sm-0">
                        <div class="row p-3">
                            <div class="form-group d-inline-block">
                                <?php foreach ($questions as $key => $question) { ?>
                                    <label for="question"> <?php echo $question; ?> </label><br><br>
                                <?php } ?>
                            </div>
                            <div class="form-group d-inline-block col-8">
                                <?php
                                if ($_SESSION) {
                                    foreach ($_SESSION['rates'] as $key => $value)
                                    {
                                        if ($value == "rate1")
                                        {
                                            $review = "Bad";
                                        } elseif ($value == "rate2")
                                        {
                                            $review = "Good";
                                        } elseif ($value == "rate3")
                                        {
                                            $review = "Very good";
                                        } elseif ($value == "rate4")
                                        {
                                            $review = "Excellent";
                                        }
                                        echo $review . "<br><br>";
                                    }
                                }  ?>

                            </div>
                        </div>
                    </div>
                    <?php if($_SESSION['post'] >= 25){ ?>
                    <div class="alert alert-success col-12 text-center"><b>Thanks</b>
                        <?php
                        }else{ ?>
                        <div class="alert alert-danger col-12 text-center" >
                            <b> <b>Thanks</b> <br> We will call you later on this phone: <?php echo $_SESSION['phone']; ?>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



        <?php include 'layout/footer.php'; ?>