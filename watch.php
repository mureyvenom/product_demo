<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    
<title>Demo</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="dist/css/bootstrap.css">

<link href="dist/font-awesome/css/all.css" rel="stylesheet" type="text/css">

<!-- <link rel="icon" href="images/favicon.ico" /> -->

<link href="dist/css/animate.css" rel="stylesheet">
    
<script src="dist/js/jquery.3.4.1.min.js"></script>
    
<script src="dist/js/popper.js" type="text/javascript"></script>
    
<script src="dist/js/bootstrap.js" type="text/javascript"></script>

<!-- Main Stylesheet -->

<link href="dist/style.css" rel="stylesheet" type="text/css" media="all">

<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    
<script src="dist/js/wow.min.js"></script>

<script>

new WOW().init();

</script>

</head>
<body>

<?php include 'inc/header.php'; ?>

<div id="watch" class="bg-secondary">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="video_container">

                    <video height="480" width="100%" controls="">

                        <source src="https://vc.sporttube.com/video/2021/1/17/JwLCCCG.mp4">

                    </video>

                    <div class="title">

                        Show Title

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="featured_box">

    <div class="container">

        <div class="row">

            <div class="col-12"><h3>Other Competitions</h3></div>

            <div class="col-md-3">

                <a href="watch">

                    <div class="competition-card bg-info">

                        <div class="title">Competition</div>

                        <div class="country">Country</div>

                    </div>

                </a>

            </div>

            <div class="col-md-3">

                <a href="watch">

                    <div class="competition-card bg-success">

                        <div class="title">Competition</div>

                        <div class="country">Country</div>

                    </div>

                </a>

            </div>

            <div class="col-md-3">

                <a href="watch">

                    <div class="competition-card bg-warning">

                        <div class="title">Competition</div>

                        <div class="country">Country</div>

                    </div>

                </a>

            </div>

            <div class="col-md-3">

                <a href="watch">

                    <div class="competition-card bg-danger">

                        <div class="title">Competition</div>

                        <div class="country">Country</div>

                    </div>

                </a>

            </div>

        </div>

    </div>

</div>

<?php include 'inc/footer.php'; ?>

</body>
</html>