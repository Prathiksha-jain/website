<!DOCTYPE html>
<html lang="en">

<head>
    <title>ALVAS PARENTS PORTAL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="navi">
        <?php include 'navigation.php';?>
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <!-- <li data-target="#demo" data-slide-to="2"></li> -->
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/aiet.jpg" alt="">
                <div class="carousel-caption">
                    <h4>Welcome to AIET Parents Portal</h4>
                    <p>We are here connecting you digitaly to your child!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/aiet.jpg" alt="">
                <div class="carousel-caption">
                    <h4>Welcome to AIET Parents Portal</h4>
                    <p>We are here connecting you digitaly to your child!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div>
        <div class="card_container">
            <div class="card">
                <img src="./assets/view_attendance.jpg" alt="">
                <div class="card_content">
                    <h3>
                        View Attendance
                    </h3>
                    <p>We are delighted to offer you convenient access to your child's attendance details. Now you can
                        stay updated with their attendance records right at your fingertips.</p>
                    <a href="" class="btn">View More</a>
                </div>
            </div>

            <div class="card">
                <img src="./assets/view_marks.jpg" alt="">
                <div class="card_content">
                    <h3>
                        View Marks
                    </h3>
                    <p>You can easily view your child's marks, assignments, and exam results online. This provides a
                        transparent and efficient way to stay informed about your child's progress throughout the year.
                    </p>
                    <a href="marks.php" class="btn">View More</a>
                </div>
            </div>

            <div class="card">
                <img src="./assets/contact_faculty.jpg" alt="">
                <div class="card_content">
                    <h3>
                        Contact Faculty
                    </h3>
                    <p>Our faculty is committed to supporting your child's educational journey, and they are here to
                        assist with any queries you may have. Collaborative communication between parents, students, and
                        faculty is key to achieving academic excellence.</p>
                    <a href="" class="btn">View More</a>
                </div>
            </div>

            <div class="card">
                <img src="./assets/performance.jpg" alt="">
                <div class="card_content">
                    <h3>
                        Notice
                    </h3>
                    <p>We share important notices, announcements, and events to ensure that everyone is well-informed
                        about college activities.All the notices are henceforth uploaded in here.</p>
                    <a href="" class="btn">View More</a>
                </div>
            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php';?>

</html>