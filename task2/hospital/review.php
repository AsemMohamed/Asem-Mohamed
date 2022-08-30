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

$flag = 1;
$score = 0;

if($_SERVER['REQUEST_METHOD'] =="POST" && !empty($_POST)) {
    header('location:Result.php');
}
include 'layout/header.php';
?>


     <div class="container">

        <div class="card">
            <div class="card-header">
                <h1 class="text-center text-primary">Review</h1>
            </div>
            <div class="card-body text-center">
                <form method="POST" attribute="post" action="#">
                     <div class="col-lg-12 offset-sm-0">
                            <div class="form-group text-left">
                                <b><label for="question" class="col-md-5">Question</label></b>
                                <b><?php foreach ($rates as $rate => $score) { ?>
                                        <label for="$rate" class="pl-5"> <?php echo $rate; ?></label>

                                    <?php } ?></b>
                            </div>

                            <div class="row p-3">
                                <div class="form-group d-inline-block">
                                    <?php foreach ($questions as $key => $question) { ?>
                                        <label for="quest" class=""> <?php echo $question; ?> </label><br><br>
                                    <?php } ?>
                                </div>

                                <div class="form-group d-inline-block col-8">
                                    <?php foreach ($questions as $key => $quest) { ?>
                                        <?php for ($x = 1; $x <= count($rates); $x++) { ?>
                                            <input type="radio" class="col-2" value="<?php echo "rate" . $x; ?>" name="<?php echo  "button" . $flag;  ?>">


                                            <?php
                                        }
                                        $flag++; ?>
                                        <br><br>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary col-12 text-center"><b>
                                <h5>Result</h5>
                            </b></button><br><br>
                        <?php
                        $score = 0;
                        if ($_POST) {
                            foreach ($_POST as $key => $value) {
                                if ($value == "rate1") {
                                    $score += $rates["Bad"];
                                } elseif ($value == "rate2") {
                                    $score += $rates["Good"];
                                } elseif ($value == "rate3") {
                                    $score += $rates["Very good"];
                                } elseif ($value == "rate4") {
                                    $score += $rates["Excellent"];
                                }
                            }
                            $_SESSION['post'] = $score;
                            $_SESSION['rates'] = $_POST ;
                        }

                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>



<?php include 'layout/footer.php'; ?>