<?php include 'includes/config.php'?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="BlackMirrorDesign">
        <title>DSC</title>
        <link href="css/heroic-features.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
        <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"> </script>
    </head>
    <body class="home">
        <header id="js-headerHome">
            <div id="logo">
                <a href="index.php">
            <img class="card-img-top" src="images/Logo.png" alt="Logo"></a>
            </div>
        </header>
         <!-- Navigation -->
        <nav id="sticky-top" class="navbar navbar-expand-lg navbar-light  sticky-top">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
                  </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="detail.php">Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="membership.php">membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <!-- Page Content -->
        <main id="wrapper" class="container">
            <!-- Page Features -->
            <section>
            <div class="home-search">
                <form class="col-lg-12 col-md-12 col-sm-12 p-0 ">
                    <div class="input-group row">
                        <span class="input-group-text col-lg-3 col-md-10 col-sm-12 " >
                            <h4>DIRECTORY SEARCH</h4>
                        </span>
                        <select class="custom-select btn btn-secondary col-lg-3 col-md-6 col-sm-12 " id="inputGroupSelect01">
                            <option selected>Select...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="custom-select btn btn-secondary col-lg-3 col-md-6 col-sm-12 " id="inputGroupSelect02">
                            <option selected>Select...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="custom-select btn btn-secondary col-lg-3 col-md-6 col-sm-12 " id="inputGroupSelect03">
                            <option selected>Select...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="custom-select btn btn-secondary  col-lg-3 col-md-6 col-sm-12 " id="inputGroupSelect04">
                            <option selected>Select...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-secondary col-md-12 col-sm-12  " type="submit">Search</button>
                        </div>
                    </div>
                </form>
                </div>
                <div class="suggested-search ">
                    <!-- <div class="row"> -->
                        <form class="col-lg-12 col-md-12 col-sm-12 p-0 ">
                        <div class="input-group">
                            <div class=" suggest-left row col-lg-4 col-md-12 col-sm-12 ">
                                    <span class="input-group-text">
                                        <h4>SUGGESTED SEARCH</h4>
                                    </span>
                                    <p>We are Seattle Downtown Counselors: a collaborative
                                        practice of independent mental health, career and organizational professionals who have experienced all the challenges you have faced. We are a microcosm of the Downtown Seattle Experience; a community of multiple cultures, genders, races, outlooks and orientations. We draw upon our own experiences as well as our professional training to help you through troubling times.
                                    </p>
                            </div>
                            <div class=" suggest-right col-lg-8 col-md-10 col-sm-12 ">
                                    <div class="  col-md-12 offset-md-1">
                                        <button class="btn btn-secondary col-lg-3 col-md-6 col-sm-6" type="submit">Abuse / Incest / PTSD</button>
                                        <button class="btn btn-secondary col-lg-3 col-md-6 col-sm-6" type="submit">Addiction/Drug / Alcohol</button>
                                        <button class="btn btn-secondary col-lg-3 col-md-6 col-sm-6" type="submit">Adult Adjustment / Life Transitioning</button>
                                        <button class="btn btn-secondary col-lg-3 col-md-6 col-sm-6" type="submit">Anxiety / Panic Disorder</button>
                                    </div>
                                    <div class=" col-md-12 offset-md-1">
                                        <button class="btn btn-secondary  col-lg-3 col-md-6 col-sm-6" type="submit">Child/Teen</button>
                                        <button class="btn btn-secondary  col-lg-3 col-md-6 col-sm-6" type="submit">Christian / Pastoral</button>
                                        <button class="btn btn-secondary  col-lg-3 col-md-6 col-sm-6" type="submit">Communication / Social Skills</button>
                                        <button class="btn btn-secondary  col-lg-3 col-md-6 col-sm-6" type="submit">Consulting / Coaching</button>
                                    </div>
                                    <div class="  col-md-12 offset-md-1">
                                        <button class="btn btn-secondary col-lg-3 col-md-6 col-sm-6" type="submit">Couples / Marriage</button>
                                        <button class="btn btn-secondary col-lg-3 col-md-6 col-sm-6" type="submit">Family Counseling</button>
                                        <button class="btn btn-secondary col-lg-3 col-md-6 col-sm-6" type="submit">Grief</button>
                                        <button class="btn btn-secondary col-lg-3 col-md-6 col-sm-6" type="submit">Group Therapy</button>
                                    </div>
                                    <div class="  col-md-12 offset-md-1">
                                        <button class="btn btn-secondary col-lg-3 col-md-6 col-sm-6" type="submit">LGBTQIA</button>
                                        <button class="btn btn-secondary col-lg-3 col-md-6 col-sm-6" type="submit">Special Issues</button>
                                        <button class="btn btn-secondary col-lg-3 col-md-6 col-sm-6" type="submit">Stress / Depression</button>
                                        <button class="btn btn-secondary col-lg-3 col-md-6 col-sm-6" type="submit">Women</button>
                                    </div>
                               </div>
                               </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
            <div class="row text-left">
                <div class="col-md-12 col-sm-12" >
                    <p class="ml-4">Living our lives in the 21st century urban world of Seattle can be both exciting and stressful. The constant pressure we all feel to do more--and be more--in both our professional and personal lives can lead to rushed decisions and interactions that can have less than optimal results. Meet the Counselors to learn more about   Downtown Seattle Counseling, and read about each professional's credentials, philosophy, and methodology when working together with you.
                          </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="detail.php">
                    <div class="card">
                        <img class="card-img-top" src="images/counselor.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Lindsey Hewes, MA </h4>
                            <h5 class="card-description">LMHC, GMHS</h5>
                            <p class="card-text">Adult Adjustment / Life Transitioning Counseling, Anxiety / Panic Disorders Counseling, Couples / Marriage Counseling, Grief Counseling,        Specialty Issues, Stress / Depression Counseling</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                    <img class="card-img-top" src="images/counselor.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Lindsey Hewes, MA </h4>
                            <h5 class="card-description">LMHC, GMHS</h5>
                            <p class="card-text">Adult Adjustment / Life Transitioning Counseling, Anxiety / Panic Disorders Counseling, Couples / Marriage Counseling, Grief Counseling,        Specialty Issues, Stress / Depression Counseling</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                    <img class="card-img-top" src="images/counselor.jpg" alt="">
                        <div class="card-body">
                        <h4 class="card-title">Lindsey Hewes, MA </h4>
                            <h5 class="card-description">LMHC, GMHS</h5>
                            <p class="card-text">Adult Adjustment / Life Transitioning Counseling, Anxiety / Panic Disorders Counseling, Couples / Marriage Counseling, Grief Counseling,        Specialty Issues, Stress / Depression Counseling</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                    <img class="card-img-top" src="images/counselor.jpg" alt="">
                        <div class="card-body">
                        <h4 class="card-title">Lindsey Hewes, MA </h4>
                            <h5 class="card-description">LMHC, GMHS</h5>
                            <p class="card-text">Adult Adjustment / Life Transitioning Counseling, Anxiety / Panic Disorders Counseling, Couples / Marriage Counseling, Grief Counseling,        Specialty Issues, Stress / Depression Counseling</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                    <img class="card-img-top" src="images/counselor.jpg" alt="">
                        <div class="card-body">
                        <h4 class="card-title">Lindsey Hewes, MA </h4>
                            <h5 class="card-description">LMHC, GMHS</h5>
                            <p class="card-text">Adult Adjustment / Life Transitioning Counseling, Anxiety / Panic Disorders Counseling, Couples / Marriage Counseling, Grief Counseling,        Specialty Issues, Stress / Depression Counseling</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                    <img class="card-img-top" src="images/counselor.jpg" alt="">
                        <div class="card-body">
                        <h4 class="card-title">Lindsey Hewes, MA </h4>
                            <h5 class="card-description">LMHC, GMHS</h5>
                            <p class="card-text">Adult Adjustment / Life Transitioning Counseling, Anxiety / Panic Disorders Counseling, Couples / Marriage Counseling, Grief Counseling,        Specialty Issues, Stress / Depression Counseling</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                    <img class="card-img-top" src="images/counselor.jpg" alt="">
                        <div class="card-body">
                        <h4 class="card-title">Lindsey Hewes, MA </h4>
                            <h5 class="card-description">LMHC, GMHS</h5>
                            <p class="card-text">Adult Adjustment / Life Transitioning Counseling, Anxiety / Panic Disorders Counseling, Couples / Marriage Counseling, Grief Counseling,        Specialty Issues, Stress / Depression Counseling</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                    <img class="card-img-top" src="images/counselor.jpg" alt="">
                        <div class="card-body">
                        <h4 class="card-title">Lindsey Hewes, MA </h4>
                            <h5 class="card-description">LMHC, GMHS</h5>
                            <p class="card-text">Adult Adjustment / Life Transitioning Counseling, Anxiety / Panic Disorders Counseling, Couples / Marriage Counseling, Grief Counseling,        Specialty Issues, Stress / Depression Counseling</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                    <img class="card-img-top" src="images/counselor.jpg" alt="">
                        <div class="card-body">
                        <h4 class="card-title">Lindsey Hewes, MA </h4>
                            <h5 class="card-description">LMHC, GMHS</h5>
                            <p class="card-text">Adult Adjustment / Life Transitioning Counseling, Anxiety / Panic Disorders Counseling, Couples / Marriage Counseling, Grief Counseling,        Specialty Issues, Stress / Depression Counseling</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                    <img class="card-img-top" src="images/counselor.jpg" alt="">
                        <div class="card-body">
                        <h4 class="card-title">Lindsey Hewes, MA </h4>
                            <h5 class="card-description">LMHC, GMHS</h5>
                            <p class="card-text">Adult Adjustment / Life Transitioning Counseling, Anxiety / Panic Disorders Counseling, Couples / Marriage Counseling, Grief Counseling,        Specialty Issues, Stress / Depression Counseling</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                    <img class="card-img-top" src="images/counselor.jpg" alt="">
                        <div class="card-body">
                        <h4 class="card-title">Lindsey Hewes, MA </h4>
                            <h5 class="card-description">LMHC, GMHS</h5>
                            <p class="card-text">Adult Adjustment / Life Transitioning Counseling, Anxiety / Panic Disorders Counseling, Couples / Marriage Counseling, Grief Counseling,        Specialty Issues, Stress / Depression Counseling</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                    <img class="card-img-top" src="images/counselor.jpg" alt="">
                        <div class="card-body">
                        <h4 class="card-title">Lindsey Hewes, MA </h4>
                            <h5 class="card-description">LMHC, GMHS</h5>
                            <p class="card-text">Adult Adjustment / Life Transitioning Counseling, Anxiety / Panic Disorders Counseling, Couples / Marriage Counseling, Grief Counseling,        Specialty Issues, Stress / Depression Counseling</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            </div>
        </main>
        <!-- /.container -->
        <?php include 'includes/footer.php'?>