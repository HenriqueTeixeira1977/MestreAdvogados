<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mestre Advogados Associados</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
<!-- Vendor CSS Files -->
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Main CSS File -->
    <link href="./assets/css/main.css" rel="stylesheet">
    <link href="./assets/css/header.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">    
</head>
<body>
    <!--  HEADER  -->
    <div class="header">
            <?php include ('./includes/header.php');?>
        </div>
<!--  /HEADER  -->
    <main>  
<!--  HERO  -->            
        <section id="topo" class="topo">
            <div id="container" class="container">
                <div id="topo-bg" class="topo-bg">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="../assets/img/hero-carousel/hero-carousel-1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/hero-carousel/hero-carousel-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/hero-carousel/hero-carousel-3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div id="topo-logo" class="topo-logo">
                    <img src="../mestreadvogados/assets/img/logo2.png" alt="">
                </div>
                <div id="topo-txt" class="topo-txt">
                    <h1>Excelencia & Credibilidade</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure magni sit numquam eos veniam dolorum fugiat in sint libero, saepe iusto porro rem veritatis quaerat ratione cum obcaecati nemo repudiandae.</p>
                </div>
                <div id="topo-btn" class="topo-btn">
                    <a href="#">Saiba Mais</a>
                </div>
            </div>
        </section>
<!--  /HERO  -->    
<!--  FOOTER  -->
        <div class="footer">
            <?php include ('./includes/footer.php');?>
        </div>
<!--  /FOOTER  -->   
    </main>
</body>
</html>