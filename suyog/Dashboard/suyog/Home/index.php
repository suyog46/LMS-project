



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin rel="stylesheet">
    <link rel="stylesheet" href="../Components/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <section class="firstview">
     
        <?php include '../Components/Navbar.php' ?>
        <div class="view-text position-absolute">
            <h1 class="fs-1">Learning for a <span>
                    Lifetime</span></h1>
            <p>
                <span>Advance</span> your career. Pursue your passion.
                Keep learning.
            </p>
            <button class="but rounded-pill fc shadow">Find courses</button>
        </div>
    </section>



    <section class="py-3 container dis">
        <div class="row icons g-5 flex-wrap ">
            <div class="col-lg-4  gap-4 d-flex align-items-center">
                <img src="img/ic2.png" alt="">
                <div class="icon-text">
                    <h4>

                        8,000 online courses</h4>
                    <p>Explore a variety of fresh topics</p>
                </div>
            </div>
            <div class="col-lg-4  gap-4  d-flex align-items-center">
                <img src="img/ic2.png" alt="">
                <div class="icon-text">
                    <h4>

                        Expert instruction</h4>
                    <p>Find the right instructor for you</p>
                </div>
            </div>
            <div class="col-lg-4  gap-4  d-flex align-items-center">
                <img src="img/ic3.png" alt="">
                <div class="icon-text">
                    <h4>


                        Lifetime access</h4>
                    <p>Learn on your schedule</p>
                </div>
            </div>
        </div>
    </section>
    <section class="category container">
        <div class="  category-text  lh-lg text-center">
            <h1 class="fs-3">
                BROWSE ONLINE COURSE CATEGORIES
            </h1>
            <p>
                Online learning offers a new way to explore subjects <br>you’re passionate about. Find your interests by
                browsing our online course categories:
            </p>
        </div>
        <div class="row cat g-4 p-5">
            <div class="col-lg-4 col-md-6">
                <div class="catb ">
                    <div class="catb-inner shadow rounded">
                        <div class="catb-front  catf-1 rounded">
                            <h1>Business</h1>
                        </div>
                        <div class="catb-back rounded catb-1">
                            <div class="back-text">
                                <h3>12 courses</h3>
                                <a link="courses.html" class="btn btn-primary rounded-pill">View all courses</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="catb ">
                    <div class="catb-inner shadow rounded">
                        <div class="catb-front  catf-2 rounded">
                            <h1>Arts</h1>
                        </div>
                        <div class="catb-back rounded catb-2">
                            <div class="back-text">
                                <h3>16 courses</h3>
                                <a link="courses.html" class="btn btn-primary rounded-pill">View all courses</a>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
            <div class="col-lg-4 col-md-6">
                <div class="catb ">
                    <div class="catb-inner shadow rounded">
                        <div class="catb-front  catf-3 rounded">
                            <h1>Languages</h1>
                        </div>
                        <div class="catb-back rounded catb-1">
                            <div class="back-text">
                                <h3>22 courses</h3>
                                <a link="courses.html" class="btn btn-primary rounded-pill">View all courses</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="catb ">
                    <div class="catb-inner shadow rounded">
                        <div class="catb-front  catf-4 rounded">
                            <h1>History</h1>
                        </div>
                        <div class="catb-back rounded catb-4">
                            <div class="back-text">
                                <h3>12 courses</h3>
                                <a link="courses.html" class="btn btn-primary rounded-pill">View all courses</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="catb ">
                    <div class="catb-inner shadow rounded">
                        <div class="catb-front  catf-5 rounded">
                            <h1>Politics</h1>
                        </div>
                        <div class="catb-back rounded catb-5">
                            <div class="back-text">
                                <h3>36 courses</h3>
                                <a link="courses.html" class="btn btn-primary rounded-pill">View all courses</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="catb ">
                    <div class="catb-inner shadow rounded">
                        <div class="catb-front  catf-6 rounded">
                            <h1>Enivironment</h1>
                        </div>
                        <div class="catb-back rounded catb-6">
                            <div class="back-text">
                                <h3>17 courses</h3>
                                <a link="courses.html" class="btn btn-primary rounded-pill">View all courses</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a href="" class="text-decoration-none text-dark">
            <div class="but mx-auto text-center">VIEW ALL COURSES</div>
        </a>
    </section>
    <?php include '../Components/footer.php' ?>
<script src="../Components/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>
   
</body>

</html>