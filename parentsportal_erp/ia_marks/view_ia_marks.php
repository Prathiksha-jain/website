<?php
require_once "../config.php";
$con = $link;
include_once '../navigation.php';
$usn ="4al19cs110";
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="../bootstrap/css/style.css">
<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
    aria-controls="multiCollapseExample1">IA 1</a>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2"
    aria-expanded="false" aria-controls="multiCollapseExample2">IA 2</button>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample3"
    aria-expanded="false" aria-controls="multiCollapseExample2">IA 3 </button>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false"
    aria-controls="multiCollapseExample1 multiCollapseExample2">Show all</button>

</p>
<?php $mark="SELECT * FROM `marks` WHERE usn = \"$usn\"";
$res=$con->query($mark);?>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample1">



            <div class="container">

                <ul class="responsive-table">
                    <li class="table-header">
                        <div class="col col-md-6  col-lg-5 col-6">Subject</div>
                        <div class="col col-md-3  col-lg-3 col-3">IA1</div>


                    </li>
                    <?php foreach($res as $rows) {
        ?>

                    <li class="table-row">
                        <div class="col col-md-6  col-lg-5 col-6"><?php echo $rows['sub'] ?></div>
                        <div class="col col-md-3  col-lg-3 col-3"><?php echo $rows['ia1'] ?></div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="container">

                <ul class="responsive-table">
                    <li class="table-header">
                        <div class="col col-md-6  col-lg-5 col-6">Subject</div>
                        <div class="col col-md-3  col-lg-3 col-3">IA2</div>


                    </li>
                    <?php foreach($res as $rows) {
?>

                    <li class="table-row">
                        <div class="col col-md-6  col-lg-5 col-6"><?php echo $rows['sub'] ?></div>
                        <div class="col col-md-3  col-lg-3 col-3"><?php echo $rows['ia2'] ?></div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample3">
            <div class="container">

                <ul class="responsive-table">
                    <li class="table-header">
                        <div class="col col-md-6  col-lg-5 col-6">Subject</div>
                        <div class="col col-md-3  col-lg-3 col-3">IA3</div>


                    </li>
                    <?php foreach($res as $rows) {
?>

                    <li class="table-row">
                        <div class="col col-md-6  col-lg-5 col-6"><?php echo $rows['sub'] ?></div>
                        <div class="col col-md-3  col-lg-3 col-3"><?php echo $rows['ia3'] ?></div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

</div>


<?php
include_once '../footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>