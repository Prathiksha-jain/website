<?php
require_once "../config.php";
$con = $link;
include_once '../navigation.php';
$usn ="4al19cs110";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
body {
    font-family: "lato", sans-serif;
}



h2 {
    font-size: 26px;
    margin: 20px 0;
    text-align: center;
}

h2 small {
    font-size: 0.5em;
}

.responsive-table li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
}

.responsive-table .table-header {
    background-color: #95A5A6;
    font-size: 14px;
    text-transform: uppercase;
    /* letter-spacing: 0.03em; */
}

.responsive-table .table-row {
    background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
}



@media all and (max-width: 767px) {

    .responsive-table {
        padding-inline-start: 0%;
    }



    .responsive-table .col {
        flex-basis: 100%;
    }

    .responsive-table .col {
        display: flex;
        padding: 10px 0;
    }

    .responsive-table .col:before {
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
    }
}
</style>
<?php $mark="SELECT * FROM `marks` WHERE usn = \"$usn\"";
$res=$con->query($mark);?>


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
<?php include '../footer.php' ;?>