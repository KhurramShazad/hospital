<!DOCTYPE HTML>
<html>

<head>
    <title>Online Doctor Appointment</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/responsiveslides.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {

            // Slideshow 1
            $("#slider1").responsiveSlides({
                maxwidth: 1600,
            });
        });
    </script>

</head>

<body>
    <?php include 'nav.php' ?>
    <!--start-image-slider---->
    <div class="image-slider">
        <!-- Slideshow 1 -->
        <ul class="rslides" id="slider1">
            <li><img src="images/aboutus.jpg" alt=""></li>
        </ul>
        <!-- Slideshow 2 -->
    </div>
    <!--End-image-slider---->
    <div class="clear"> </div>
    <?php include 'footer.php'; ?>
</body>

</html>