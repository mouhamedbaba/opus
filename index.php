<!-- <?php require_once('assets/requette/database.php');
        require_once('assets/requette/sendMail.php')
        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppus Buyer</title>
    <link rel="icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="icon" href="assets/favicon/unnamed.png">
</head>
<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-md fixed-top " id="bg-defined" style="background: rgba(0, 11, 26, 0.5);">
            <div class="container">
                <a class="navbar-brand text-uppercase Oppus text-light" type="button" href="index.html">
                    <span class="p-1 rounded-3 ">OPUS BUYER</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img class="navbar-toggler-icon" src="../sweb/assets/icons/menu (2).png" alt="">
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item t active ">
                            <a class="nav-link fw-bold text-light" href="#Acceuil">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#qui-somme-nous">A propos</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-light" href="#Services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#Actualités">Actualités </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#contact">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="Acceuil">
        <div class="loader d-none " id="load">
            <div class="spinner"></div>
        </div>
        <div class="section-1">
            <div class="container d-flex justify-content-end ">
                <div class="banner-content my-5 ">
                    <div class="d-flex align-items-start">
                        <h1 class="texte-principal d-flex justify-content-center">Externalisation Achats,<br> gestion
                            fournisseurs</h1>
                    </div>
                    <div class="d-flex align-items-center my-5">
                        <h3 class="text-slide" id="text-slide"></h3>
                    </div>
                    <div class=" d-flex justify-content-end pt-5 align-items-bottom my-4">
                        <a href="#contact" class="btn ">OBTENIR UN DEVIS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5" id="qui-somme-nous">
        <div class="container-fluid  ">
            <div class="section_title mx-md-5">
                <h2 class="titre">A propos</h2>
                <div class="souligne"></div>
                <h6 class="my-5 text-attache-section-1">Des solutions clés en main pour vos achats de produits et
                    services.</h6>
                <div class="row">
                    <div class="col-sm-12 col-md-6 ">
                        <div class="img-slide-container">
                            <img src="assets/img/img-slide/banner-3.jpg" class="d-block w-100" alt="...">
                            <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../sweb/assets/img/img-slide/banner-0.jpg" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../sweb/assets/img/img-slide/banner-10.jpg" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../sweb/assets/img/img-slide/banner-2.jpg" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../sweb/assets/img/img-slide/banner-4.jpg" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex align-content-between flex-wrap my-4 my-md-0">
                        <!-- <button class="detail-qui-somme-nous-container d-flex align-items-center my-2 my-md-0 ">
                            <svg width="40" height="40" viewBox="0 0 45 45" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="mx-3">
                                <path class="icons-qui-somme-nous-fills"
                                    d="M1.81818 9.48855e-05C1.33597 9.48855e-05 0.873508 0.237148 0.532533 0.659104C0.191558 1.08106 0 1.65335 0 2.25009C0 2.84683 0.191558 3.41912 0.532533 3.84108C0.873508 4.26303 1.33597 4.50009 1.81818 4.50009H5.85454L10.6255 28.125C11.0309 30.1275 12.48 31.5 14.1473 31.5H36.82C38.4618 31.5 39.8564 30.15 40.2873 28.1925L45 6.75008H41.1927L36.8182 27H14.1455L9.37636 3.37509C9.17936 2.40586 8.72523 1.54647 8.08669 0.934549C7.44815 0.32263 6.66214 -0.00641909 5.85454 9.48855e-05H1.81818ZM34.5455 31.5C31.5545 31.5 29.0909 34.5488 29.0909 38.25C29.0909 41.9513 31.5545 45 34.5455 45C37.5364 45 40 41.9513 40 38.25C40 34.5488 37.5364 31.5 34.5455 31.5ZM18.1818 31.5C15.1909 31.5 12.7273 34.5488 12.7273 38.25C12.7273 41.9513 15.1909 45 18.1818 45C21.1727 45 23.6364 41.9513 23.6364 38.25C23.6364 34.5488 21.1727 31.5 18.1818 31.5ZM23.6364 9.48855e-05V11.2501H18.1818L25.4545 20.2501L32.7273 11.2501H27.2727V9.48855e-05H23.6364ZM18.1818 36C19.2073 36 20 36.981 20 38.25C20 39.519 19.2073 40.5 18.1818 40.5C17.1564 40.5 16.3636 39.519 16.3636 38.25C16.3636 36.981 17.1564 36 18.1818 36ZM34.5455 36C35.5709 36 36.3636 36.981 36.3636 38.25C36.3636 39.519 35.5709 40.5 34.5455 40.5C33.52 40.5 32.7273 39.519 32.7273 38.25C32.7273 36.981 33.52 36 34.5455 36Z"
                                    fill="#00214D" />
                            </svg>
                            <span class="mx-1 detail-texte">Acheteurs professionnels expérimentés</span>
                        </button> -->
                        <button class="detail-qui-somme-nous-container d-flex align-items-center my-2 my-md-0">
                            <svg width="40" height="40" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-3">
                                <path class="icons-qui-somme-nous-fills" d="M23.8479 26.2017C23.2258 24.3524 23.6406 22.914 23.8479 22.0921C23.6406 21.2702 23.2258 20.0373 23.6406 18.188C24.2627 16.5442 25.2995 15.7223 25.9217 15.1058C26.129 14.2839 26.5438 13.051 28.2028 11.8181C29.6544 10.7907 31.106 10.7907 31.9355 10.7907C32.1429 10.5853 32.5576 10.3798 32.9723 10.1743V4.21541C33.1797 2.36609 31.7281 0.927734 29.8618 0.927734H3.31797C1.45161 0.927734 0 2.36609 0 4.21541V24.3524C0 26.2017 1.45161 27.6401 3.31797 27.6401H24.6774C24.2627 27.2291 24.0553 26.8181 23.8479 26.2017ZM4.14747 9.14691V5.03732L16.5899 11.2017L29.0323 5.03732V9.14691L16.5899 15.3113L4.14747 9.14691ZM44.7926 19.2154C44.3779 17.9825 43.341 17.777 42.7189 17.1606C42.3041 16.5442 42.3041 15.3113 41.2673 14.6949C40.2304 13.8729 39.1935 14.2839 38.3641 14.0784C37.5346 13.8729 36.9124 12.8455 35.6682 12.8455C34.424 12.8455 33.8018 13.6675 32.9723 14.0784C32.1429 14.2839 31.106 13.8729 30.0691 14.6949C29.0323 15.3113 29.2396 16.3387 28.6175 17.1606C27.9954 17.777 26.9585 18.188 26.5438 19.2154C26.129 20.4483 26.9585 21.2702 26.9585 22.0921C26.9585 22.914 26.129 23.736 26.5438 24.9688C26.9585 26.2017 27.9954 26.4072 28.6175 27.0236C29.0323 27.6401 29.0323 28.8729 30.0691 29.4894C31.106 30.3113 32.1429 29.9003 32.9723 30.1058C33.8018 30.3113 34.424 31.3387 35.6682 31.3387C36.9124 31.3387 37.5346 30.5168 38.3641 30.1058C39.1935 29.9003 40.2304 30.3113 41.2673 29.4894C42.3041 28.6675 42.3041 27.6401 42.7189 27.0236C43.341 26.4072 44.3779 25.9962 44.7926 24.9688C45.2074 23.736 44.3779 22.914 44.3779 22.0921C44.3779 21.2702 45.2074 20.4483 44.7926 19.2154ZM35.6682 28.462C32.1429 28.462 29.447 25.5853 29.447 22.2976C29.447 19.0099 32.3502 16.1332 35.6682 16.1332C38.9862 16.1332 41.8894 19.0099 41.8894 22.2976C41.8894 25.5853 39.1936 28.462 35.6682 28.462ZM38.7788 22.0921C38.7788 23.736 37.3272 25.1743 35.6682 25.1743C34.0092 25.1743 32.5576 23.736 32.5576 22.0921C32.5576 20.4483 34.0092 19.0099 35.6682 19.0099C37.3272 19.0099 38.7788 20.4483 38.7788 22.0921ZM38.3641 34.0099L37.3272 39.5579L36.0829 45.9277L31.9355 42.0236L26.9585 44.2839L29.0323 32.5716C29.8618 32.9825 30.8986 33.188 31.9355 33.188C32.5576 33.599 33.3871 34.0099 34.0092 34.2154C34.424 34.4209 35.0461 34.4209 35.6682 34.4209C36.7051 34.6264 37.5346 34.4209 38.3641 34.0099ZM45 38.9414L40.8525 37.5031L41.682 32.9825L42.9263 32.3661L43.1336 32.1606L45 38.9414Z" fill="#00214D" />
                            </svg>
                            <span class="mx-1 detail-texte">Experts en externalisation achats </span>
                        </button>
                        <button class="detail-qui-somme-nous-container d-flex align-items-center my-2 my-md-0">
                            <svg width="40" height="40" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-3">
                                <path class="icons-qui-somme-nous-fills" d="M4.43478 9.31412L6.19565 15.3002L4.43478 21.2603L10.9891 24.4876L15 29.719L22.5 28.3135L30 29.719L34.0109 24.4876L40.5652 21.2603L38.8043 15.3002L40.5652 9.31412L34.0435 6.08682L30 0.855469L22.5 2.28693L15.0326 0.881495L10.9565 6.08682L4.43478 9.31412ZM22.5326 25.815C19.0733 25.815 15.7556 24.7182 13.3095 22.7658C10.8634 20.8134 9.48913 18.1654 9.48913 15.4043C9.48913 12.6433 10.8634 9.99528 13.3095 8.0429C15.7556 6.09053 19.0733 4.9937 22.5326 4.9937C29.7065 4.9937 35.5435 9.65246 35.5435 15.3783C35.5435 21.1562 29.7065 25.815 22.5326 25.815ZM22.4674 23.2123C17.0543 23.2123 12.7174 19.7248 12.7174 15.4043C12.7174 11.11 17.0543 7.59636 22.4674 7.59636C27.8804 7.59636 32.2826 11.11 32.2826 15.4043C32.2826 19.7248 27.8804 23.2123 22.4674 23.2123ZM34.9891 26.0752L30.8152 31.9052L24.0326 30.682L32.2826 45.8555L36.8478 40.1296H45L34.9891 26.0752ZM9.88044 26.2574L13.9565 32.1134L20.9022 30.7861L12.7174 45.8555L8.15217 40.1296H0L9.88044 26.2574Z" fill="#00214D" />
                            </svg>
                            <span class="mx-2 detail-texte">Tarifs compétitifs</span>
                        </button>
                        <button class="detail-qui-somme-nous-container d-flex align-items-center my-2 my-md-0">
                            <svg width="40" height="40" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-3">
                                <path class="icons-qui-somme-nous-fills" d="M23.3988 0.579141C24.1832 0.579141 24.9556 0.626575 25.6741 0.738184C26.3817 0.824604 27.0799 0.968381 27.7607 1.16788C28.4433 1.3604 29.1109 1.60036 29.7785 1.90171C30.4281 2.1891 31.0957 2.54067 31.7633 2.92293C32.892 3.59258 34.0026 4.13389 35.1343 4.56637C37.362 5.39739 39.7178 5.89189 42.1127 6.03124C43.3281 6.11216 44.5765 6.15959 45.8758 6.15959V17.3205C45.8758 19.4411 45.5854 21.45 45.0046 23.3641C44.4467 25.2509 43.654 27.0704 42.6426 28.7855C41.6354 30.4982 40.4437 32.1109 39.086 33.5987C37.7075 35.1202 36.2148 36.5486 34.6194 37.8733C33.0028 39.2018 31.3001 40.4365 29.521 41.5703C27.7428 42.7199 25.9465 43.7885 24.1503 44.7595L23.4318 45.1585L22.7133 44.7595C20.8667 43.7632 19.0631 42.6993 17.3066 41.5703C15.5175 40.4493 13.814 39.214 12.2083 37.8733C10.6138 36.5486 9.12214 35.1201 7.74462 33.5987C6.39053 32.1046 5.19353 30.4929 4.1701 28.7855C3.17597 27.0628 2.38405 25.2451 1.80804 23.3641C1.22358 21.3963 0.935417 19.3623 0.951836 17.3205V6.15959C2.25411 6.15959 3.5025 6.11216 4.71795 6.03124C5.91443 5.95378 7.10316 5.79431 8.27451 5.55411C9.42111 5.31415 10.5677 4.99607 11.6963 4.56637C12.8675 4.12584 13.9904 3.58108 15.0493 2.93967C16.3666 2.14167 17.7018 1.55293 19.019 1.16509C20.4376 0.759757 21.9152 0.562089 23.3988 0.579141ZM42.8641 8.90238C40.5979 8.7999 38.3529 8.44678 36.1761 7.85046C34.0109 7.24849 31.9485 6.36256 30.0509 5.21928C29.0667 4.61714 27.9977 4.14484 26.8746 3.8158C25.7526 3.49977 24.5859 3.34361 23.4138 3.35262C22.2331 3.34551 21.0577 3.5016 19.9261 3.8158C18.8013 4.13414 17.7337 4.60718 16.7587 5.21928C14.8579 6.36879 12.7902 7.25861 10.6186 7.86162C8.49604 8.43641 6.27469 8.78798 3.94557 8.91633V17.3344C3.94557 19.1844 4.20303 20.9534 4.71795 22.6582C5.24253 24.3482 5.96539 25.9792 6.87344 27.5215C7.79236 29.08 8.87545 30.5493 10.1067 31.9078C11.3551 33.2778 12.6873 34.5529 14.1243 35.7639C15.5613 36.9776 17.0671 38.0937 18.6418 39.1289C20.2315 40.1668 21.8241 41.1071 23.4138 41.9665C25.0416 41.0833 26.6286 40.1366 28.1709 39.1289C29.756 38.097 31.2698 36.9731 32.7034 35.7639C34.1404 34.5529 35.4756 33.2778 36.724 31.9078C37.9553 30.5494 39.0384 29.0801 39.9572 27.5215C40.8612 25.9811 41.5733 24.3494 42.0797 22.6582C42.6103 20.9272 42.8744 19.1347 42.8641 17.3344V8.90238Z" fill="#00214D" />
                                <path fill-rule="evenodd" clip-rule="evenodd" class="icons-qui-somme-nous-fills" d="M34.5595 11.4893L33.2423 10.4346L32.0268 10.5322L18.9741 24.8963L14.5284 18.981L13.3309 18.7913L11.9448 19.7149L11.7383 20.8309L17.4533 28.4371L18.103 28.7719L19.4711 28.85L20.1716 28.5654L34.6463 12.6193L34.5595 11.4893Z" />
                            </svg>
                            <span class="mx-2 detail-texte">Partenaires fiables</span>
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-center" style="margin-top: 90px;">
                    <img src="assets/img/svg.svg" alt="">
                </div>
                <div class="my-3">
                    <span class="opus-2">OPUS BUYER</span><span class="p"> est spécialiste de l’externalisation des
                        achats.
                        Nos services se chargent de vos achats internationaux et vous permettent rester
                        focalisés sur votre cœur de métier.</span>

                </div>
            </div>
        </div>
    </section>
    <section class="my-5 P-5" id="Services" style="background: rgba(239, 239, 241, 0.6);">
        <div class="container-fluid my-5 ">
            <div class=" mx-md-5 " style="margin-top: 50px;">
                <h2 class="titre">NOS SERVICES</h2>
                <div class="souligne"></div>
                <div class="row" style="margin-top: 90px;">
                    <div class="col-12 col-md-4 my-4 my-md-0  ">
                        <div class="cartes ">
                            <div class="">
                                <div class="d-flex justify-content-center  my-4 mx-5">
                                    <img src="../sweb/assets/icons/restore.png" alt="" class="icons-cartes">
                                </div>
                                <h4 type="button" class="card-titres my-3 fw-bold d-flex justify-content-center">
                                    EXTERNALISATION ACHATS</h4>
                                <div class="mx-5 my-4">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.838146 13.1836C0.586062 12.9697 0.460021 12.6975 0.460021 12.3669C0.460021 12.0364 0.586062 11.7641 0.838146 11.5503L6.16627 7.00026L0.838146 2.45026C0.586062 2.23637 0.454063 1.9692 0.442146 1.64876C0.43023 1.32832 0.562229 1.05104 0.838146 0.816927C1.09023 0.603038 1.41106 0.496094 1.80065 0.496094C2.19023 0.496094 2.51106 0.603038 2.76315 0.816927L9.08815 6.18359C9.22565 6.30026 9.32327 6.42665 9.38102 6.56276C9.43877 6.69887 9.46719 6.8447 9.46627 7.00026C9.46627 7.15582 9.43785 7.30165 9.38102 7.43776C9.32419 7.57387 9.22656 7.70026 9.08815 7.81693L2.76315 13.1836C2.51106 13.3975 2.19619 13.5095 1.81852 13.5196C1.44085 13.5297 1.11406 13.4177 0.838146 13.1836ZM9.91315 13.1836C9.66106 12.9697 9.53502 12.6975 9.53502 12.3669C9.53502 12.0364 9.66106 11.7641 9.91315 11.5503L15.2413 7.00026L9.91315 2.45026C9.66106 2.23637 9.52906 1.9692 9.51715 1.64876C9.50523 1.32832 9.63723 1.05104 9.91315 0.816927C10.1652 0.603038 10.4861 0.496094 10.8756 0.496094C11.2652 0.496094 11.5861 0.603038 11.8381 0.816927L18.1631 6.18359C18.3006 6.30026 18.3983 6.42665 18.456 6.56276C18.5138 6.69887 18.5422 6.8447 18.5413 7.00026C18.5413 7.15582 18.5124 7.30165 18.4546 7.43776C18.3969 7.57387 18.2997 7.70026 18.1631 7.81693L11.8381 13.1836C11.5861 13.3975 11.2712 13.5095 10.8935 13.5196C10.5159 13.5297 10.1891 13.4177 9.91315 13.1836Z" fill="#00214D" />
                                    </svg>
                                    <span class="mx-3">Gagnez du temps en nous confiant vos achats</span>
                                </div>
                                <div class="mx-5 my-4">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.838146 13.1836C0.586062 12.9697 0.460021 12.6975 0.460021 12.3669C0.460021 12.0364 0.586062 11.7641 0.838146 11.5503L6.16627 7.00026L0.838146 2.45026C0.586062 2.23637 0.454063 1.9692 0.442146 1.64876C0.43023 1.32832 0.562229 1.05104 0.838146 0.816927C1.09023 0.603038 1.41106 0.496094 1.80065 0.496094C2.19023 0.496094 2.51106 0.603038 2.76315 0.816927L9.08815 6.18359C9.22565 6.30026 9.32327 6.42665 9.38102 6.56276C9.43877 6.69887 9.46719 6.8447 9.46627 7.00026C9.46627 7.15582 9.43785 7.30165 9.38102 7.43776C9.32419 7.57387 9.22656 7.70026 9.08815 7.81693L2.76315 13.1836C2.51106 13.3975 2.19619 13.5095 1.81852 13.5196C1.44085 13.5297 1.11406 13.4177 0.838146 13.1836ZM9.91315 13.1836C9.66106 12.9697 9.53502 12.6975 9.53502 12.3669C9.53502 12.0364 9.66106 11.7641 9.91315 11.5503L15.2413 7.00026L9.91315 2.45026C9.66106 2.23637 9.52906 1.9692 9.51715 1.64876C9.50523 1.32832 9.63723 1.05104 9.91315 0.816927C10.1652 0.603038 10.4861 0.496094 10.8756 0.496094C11.2652 0.496094 11.5861 0.603038 11.8381 0.816927L18.1631 6.18359C18.3006 6.30026 18.3983 6.42665 18.456 6.56276C18.5138 6.69887 18.5422 6.8447 18.5413 7.00026C18.5413 7.15582 18.5124 7.30165 18.4546 7.43776C18.3969 7.57387 18.2997 7.70026 18.1631 7.81693L11.8381 13.1836C11.5861 13.3975 11.2712 13.5095 10.8935 13.5196C10.5159 13.5297 10.1891 13.4177 9.91315 13.1836Z" fill="#00214D" />
                                    </svg>
                                    <span class="mx-3">Ayez un seul interlocuteur pour vos achats</span>
                                </div>
                                <div class="mx-5 my-4">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.838146 13.1836C0.586062 12.9697 0.460021 12.6975 0.460021 12.3669C0.460021 12.0364 0.586062 11.7641 0.838146 11.5503L6.16627 7.00026L0.838146 2.45026C0.586062 2.23637 0.454063 1.9692 0.442146 1.64876C0.43023 1.32832 0.562229 1.05104 0.838146 0.816927C1.09023 0.603038 1.41106 0.496094 1.80065 0.496094C2.19023 0.496094 2.51106 0.603038 2.76315 0.816927L9.08815 6.18359C9.22565 6.30026 9.32327 6.42665 9.38102 6.56276C9.43877 6.69887 9.46719 6.8447 9.46627 7.00026C9.46627 7.15582 9.43785 7.30165 9.38102 7.43776C9.32419 7.57387 9.22656 7.70026 9.08815 7.81693L2.76315 13.1836C2.51106 13.3975 2.19619 13.5095 1.81852 13.5196C1.44085 13.5297 1.11406 13.4177 0.838146 13.1836ZM9.91315 13.1836C9.66106 12.9697 9.53502 12.6975 9.53502 12.3669C9.53502 12.0364 9.66106 11.7641 9.91315 11.5503L15.2413 7.00026L9.91315 2.45026C9.66106 2.23637 9.52906 1.9692 9.51715 1.64876C9.50523 1.32832 9.63723 1.05104 9.91315 0.816927C10.1652 0.603038 10.4861 0.496094 10.8756 0.496094C11.2652 0.496094 11.5861 0.603038 11.8381 0.816927L18.1631 6.18359C18.3006 6.30026 18.3983 6.42665 18.456 6.56276C18.5138 6.69887 18.5422 6.8447 18.5413 7.00026C18.5413 7.15582 18.5124 7.30165 18.4546 7.43776C18.3969 7.57387 18.2997 7.70026 18.1631 7.81693L11.8381 13.1836C11.5861 13.3975 11.2712 13.5095 10.8935 13.5196C10.5159 13.5297 10.1891 13.4177 9.91315 13.1836Z" fill="#00214D" />
                                    </svg>
                                    <span class="mx-3">Simplifier vos gestion et paiements en devises</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 my-4 my-md-0">
                        <div class="cartes ">
                            <div class="">
                                <div class="d-flex justify-content-center my-4">
                                    <img src="../sweb/assets/icons/consultant-services.png" alt="" class="icons-cartes">
                                </div>
                                <h4 type="button" class="card-titres my-3 fw-bold d-flex justify-content-center">CONSEIL
                                    ACHATS</h4>
                                <div class="mx-5 my-4">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.838146 13.1836C0.586062 12.9697 0.460021 12.6975 0.460021 12.3669C0.460021 12.0364 0.586062 11.7641 0.838146 11.5503L6.16627 7.00026L0.838146 2.45026C0.586062 2.23637 0.454063 1.9692 0.442146 1.64876C0.43023 1.32832 0.562229 1.05104 0.838146 0.816927C1.09023 0.603038 1.41106 0.496094 1.80065 0.496094C2.19023 0.496094 2.51106 0.603038 2.76315 0.816927L9.08815 6.18359C9.22565 6.30026 9.32327 6.42665 9.38102 6.56276C9.43877 6.69887 9.46719 6.8447 9.46627 7.00026C9.46627 7.15582 9.43785 7.30165 9.38102 7.43776C9.32419 7.57387 9.22656 7.70026 9.08815 7.81693L2.76315 13.1836C2.51106 13.3975 2.19619 13.5095 1.81852 13.5196C1.44085 13.5297 1.11406 13.4177 0.838146 13.1836ZM9.91315 13.1836C9.66106 12.9697 9.53502 12.6975 9.53502 12.3669C9.53502 12.0364 9.66106 11.7641 9.91315 11.5503L15.2413 7.00026L9.91315 2.45026C9.66106 2.23637 9.52906 1.9692 9.51715 1.64876C9.50523 1.32832 9.63723 1.05104 9.91315 0.816927C10.1652 0.603038 10.4861 0.496094 10.8756 0.496094C11.2652 0.496094 11.5861 0.603038 11.8381 0.816927L18.1631 6.18359C18.3006 6.30026 18.3983 6.42665 18.456 6.56276C18.5138 6.69887 18.5422 6.8447 18.5413 7.00026C18.5413 7.15582 18.5124 7.30165 18.4546 7.43776C18.3969 7.57387 18.2997 7.70026 18.1631 7.81693L11.8381 13.1836C11.5861 13.3975 11.2712 13.5095 10.8935 13.5196C10.5159 13.5297 10.1891 13.4177 9.91315 13.1836Z" fill="#00214D" />
                                    </svg>
                                    <span class="mx-3">Professionnalisez votre processus achats</span>
                                </div>
                                <div class="mx-5 my-4">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.838146 13.1836C0.586062 12.9697 0.460021 12.6975 0.460021 12.3669C0.460021 12.0364 0.586062 11.7641 0.838146 11.5503L6.16627 7.00026L0.838146 2.45026C0.586062 2.23637 0.454063 1.9692 0.442146 1.64876C0.43023 1.32832 0.562229 1.05104 0.838146 0.816927C1.09023 0.603038 1.41106 0.496094 1.80065 0.496094C2.19023 0.496094 2.51106 0.603038 2.76315 0.816927L9.08815 6.18359C9.22565 6.30026 9.32327 6.42665 9.38102 6.56276C9.43877 6.69887 9.46719 6.8447 9.46627 7.00026C9.46627 7.15582 9.43785 7.30165 9.38102 7.43776C9.32419 7.57387 9.22656 7.70026 9.08815 7.81693L2.76315 13.1836C2.51106 13.3975 2.19619 13.5095 1.81852 13.5196C1.44085 13.5297 1.11406 13.4177 0.838146 13.1836ZM9.91315 13.1836C9.66106 12.9697 9.53502 12.6975 9.53502 12.3669C9.53502 12.0364 9.66106 11.7641 9.91315 11.5503L15.2413 7.00026L9.91315 2.45026C9.66106 2.23637 9.52906 1.9692 9.51715 1.64876C9.50523 1.32832 9.63723 1.05104 9.91315 0.816927C10.1652 0.603038 10.4861 0.496094 10.8756 0.496094C11.2652 0.496094 11.5861 0.603038 11.8381 0.816927L18.1631 6.18359C18.3006 6.30026 18.3983 6.42665 18.456 6.56276C18.5138 6.69887 18.5422 6.8447 18.5413 7.00026C18.5413 7.15582 18.5124 7.30165 18.4546 7.43776C18.3969 7.57387 18.2997 7.70026 18.1631 7.81693L11.8381 13.1836C11.5861 13.3975 11.2712 13.5095 10.8935 13.5196C10.5159 13.5297 10.1891 13.4177 9.91315 13.1836Z" fill="#00214D" />
                                    </svg>
                                    <span class="mx-3">Accédez à des ressources opérationnelles</span>
                                </div>
                                <div class="mx-5 my-4">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.838146 13.1836C0.586062 12.9697 0.460021 12.6975 0.460021 12.3669C0.460021 12.0364 0.586062 11.7641 0.838146 11.5503L6.16627 7.00026L0.838146 2.45026C0.586062 2.23637 0.454063 1.9692 0.442146 1.64876C0.43023 1.32832 0.562229 1.05104 0.838146 0.816927C1.09023 0.603038 1.41106 0.496094 1.80065 0.496094C2.19023 0.496094 2.51106 0.603038 2.76315 0.816927L9.08815 6.18359C9.22565 6.30026 9.32327 6.42665 9.38102 6.56276C9.43877 6.69887 9.46719 6.8447 9.46627 7.00026C9.46627 7.15582 9.43785 7.30165 9.38102 7.43776C9.32419 7.57387 9.22656 7.70026 9.08815 7.81693L2.76315 13.1836C2.51106 13.3975 2.19619 13.5095 1.81852 13.5196C1.44085 13.5297 1.11406 13.4177 0.838146 13.1836ZM9.91315 13.1836C9.66106 12.9697 9.53502 12.6975 9.53502 12.3669C9.53502 12.0364 9.66106 11.7641 9.91315 11.5503L15.2413 7.00026L9.91315 2.45026C9.66106 2.23637 9.52906 1.9692 9.51715 1.64876C9.50523 1.32832 9.63723 1.05104 9.91315 0.816927C10.1652 0.603038 10.4861 0.496094 10.8756 0.496094C11.2652 0.496094 11.5861 0.603038 11.8381 0.816927L18.1631 6.18359C18.3006 6.30026 18.3983 6.42665 18.456 6.56276C18.5138 6.69887 18.5422 6.8447 18.5413 7.00026C18.5413 7.15582 18.5124 7.30165 18.4546 7.43776C18.3969 7.57387 18.2997 7.70026 18.1631 7.81693L11.8381 13.1836C11.5861 13.3975 11.2712 13.5095 10.8935 13.5196C10.5159 13.5297 10.1891 13.4177 9.91315 13.1836Z" fill="#00214D" />
                                    </svg>
                                    <span class="mx-3">Réalisez des gains d’achats pérennes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 my-4 my-md-0">
                        <div class="cartes ">
                            <div class="">
                                <div class="d-flex justify-content-center my-4">
                                    <img src="../sweb/assets/icons/search.png" alt="" class="icons-cartes">
                                </div>
                                <h4 type="button" class="card-titres my-3 fw-bold d-flex justify-content-center">
                                    SOURCING FOURNISSEURS</h4>
                                <div class="mx-5 my-4">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.838146 13.1836C0.586062 12.9697 0.460021 12.6975 0.460021 12.3669C0.460021 12.0364 0.586062 11.7641 0.838146 11.5503L6.16627 7.00026L0.838146 2.45026C0.586062 2.23637 0.454063 1.9692 0.442146 1.64876C0.43023 1.32832 0.562229 1.05104 0.838146 0.816927C1.09023 0.603038 1.41106 0.496094 1.80065 0.496094C2.19023 0.496094 2.51106 0.603038 2.76315 0.816927L9.08815 6.18359C9.22565 6.30026 9.32327 6.42665 9.38102 6.56276C9.43877 6.69887 9.46719 6.8447 9.46627 7.00026C9.46627 7.15582 9.43785 7.30165 9.38102 7.43776C9.32419 7.57387 9.22656 7.70026 9.08815 7.81693L2.76315 13.1836C2.51106 13.3975 2.19619 13.5095 1.81852 13.5196C1.44085 13.5297 1.11406 13.4177 0.838146 13.1836ZM9.91315 13.1836C9.66106 12.9697 9.53502 12.6975 9.53502 12.3669C9.53502 12.0364 9.66106 11.7641 9.91315 11.5503L15.2413 7.00026L9.91315 2.45026C9.66106 2.23637 9.52906 1.9692 9.51715 1.64876C9.50523 1.32832 9.63723 1.05104 9.91315 0.816927C10.1652 0.603038 10.4861 0.496094 10.8756 0.496094C11.2652 0.496094 11.5861 0.603038 11.8381 0.816927L18.1631 6.18359C18.3006 6.30026 18.3983 6.42665 18.456 6.56276C18.5138 6.69887 18.5422 6.8447 18.5413 7.00026C18.5413 7.15582 18.5124 7.30165 18.4546 7.43776C18.3969 7.57387 18.2997 7.70026 18.1631 7.81693L11.8381 13.1836C11.5861 13.3975 11.2712 13.5095 10.8935 13.5196C10.5159 13.5297 10.1891 13.4177 9.91315 13.1836Z" fill="#00214D" />
                                    </svg>
                                    <span class="mx-3">Accédez aux innovations technologiques</span>
                                </div>
                                <div class="mx-5 my-4">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.838146 13.1836C0.586062 12.9697 0.460021 12.6975 0.460021 12.3669C0.460021 12.0364 0.586062 11.7641 0.838146 11.5503L6.16627 7.00026L0.838146 2.45026C0.586062 2.23637 0.454063 1.9692 0.442146 1.64876C0.43023 1.32832 0.562229 1.05104 0.838146 0.816927C1.09023 0.603038 1.41106 0.496094 1.80065 0.496094C2.19023 0.496094 2.51106 0.603038 2.76315 0.816927L9.08815 6.18359C9.22565 6.30026 9.32327 6.42665 9.38102 6.56276C9.43877 6.69887 9.46719 6.8447 9.46627 7.00026C9.46627 7.15582 9.43785 7.30165 9.38102 7.43776C9.32419 7.57387 9.22656 7.70026 9.08815 7.81693L2.76315 13.1836C2.51106 13.3975 2.19619 13.5095 1.81852 13.5196C1.44085 13.5297 1.11406 13.4177 0.838146 13.1836ZM9.91315 13.1836C9.66106 12.9697 9.53502 12.6975 9.53502 12.3669C9.53502 12.0364 9.66106 11.7641 9.91315 11.5503L15.2413 7.00026L9.91315 2.45026C9.66106 2.23637 9.52906 1.9692 9.51715 1.64876C9.50523 1.32832 9.63723 1.05104 9.91315 0.816927C10.1652 0.603038 10.4861 0.496094 10.8756 0.496094C11.2652 0.496094 11.5861 0.603038 11.8381 0.816927L18.1631 6.18359C18.3006 6.30026 18.3983 6.42665 18.456 6.56276C18.5138 6.69887 18.5422 6.8447 18.5413 7.00026C18.5413 7.15582 18.5124 7.30165 18.4546 7.43776C18.3969 7.57387 18.2997 7.70026 18.1631 7.81693L11.8381 13.1836C11.5861 13.3975 11.2712 13.5095 10.8935 13.5196C10.5159 13.5297 10.1891 13.4177 9.91315 13.1836Z" fill="#00214D" />
                                    </svg>
                                    <span class="mx-3">Elargissez votre panel de fournisseurs</span>
                                </div>
                                <div class="mx-5 my-4">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.838146 13.1836C0.586062 12.9697 0.460021 12.6975 0.460021 12.3669C0.460021 12.0364 0.586062 11.7641 0.838146 11.5503L6.16627 7.00026L0.838146 2.45026C0.586062 2.23637 0.454063 1.9692 0.442146 1.64876C0.43023 1.32832 0.562229 1.05104 0.838146 0.816927C1.09023 0.603038 1.41106 0.496094 1.80065 0.496094C2.19023 0.496094 2.51106 0.603038 2.76315 0.816927L9.08815 6.18359C9.22565 6.30026 9.32327 6.42665 9.38102 6.56276C9.43877 6.69887 9.46719 6.8447 9.46627 7.00026C9.46627 7.15582 9.43785 7.30165 9.38102 7.43776C9.32419 7.57387 9.22656 7.70026 9.08815 7.81693L2.76315 13.1836C2.51106 13.3975 2.19619 13.5095 1.81852 13.5196C1.44085 13.5297 1.11406 13.4177 0.838146 13.1836ZM9.91315 13.1836C9.66106 12.9697 9.53502 12.6975 9.53502 12.3669C9.53502 12.0364 9.66106 11.7641 9.91315 11.5503L15.2413 7.00026L9.91315 2.45026C9.66106 2.23637 9.52906 1.9692 9.51715 1.64876C9.50523 1.32832 9.63723 1.05104 9.91315 0.816927C10.1652 0.603038 10.4861 0.496094 10.8756 0.496094C11.2652 0.496094 11.5861 0.603038 11.8381 0.816927L18.1631 6.18359C18.3006 6.30026 18.3983 6.42665 18.456 6.56276C18.5138 6.69887 18.5422 6.8447 18.5413 7.00026C18.5413 7.15582 18.5124 7.30165 18.4546 7.43776C18.3969 7.57387 18.2997 7.70026 18.1631 7.81693L11.8381 13.1836C11.5861 13.3975 11.2712 13.5095 10.8935 13.5196C10.5159 13.5297 10.1891 13.4177 9.91315 13.1836Z" fill="#00214D" />
                                    </svg>
                                    <span class="mx-3">Réduisez vos coûts</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5" id="Actualités">
        <div class="container-fluid  ">
            <div class="section_title mx-5 mx-md-5  ">
                <h2 class="titre">ACTUALITES</h2>
                <div class="souligne"></div>
                <div class="  my-5 ">
                    <div class="py-4 px-3" style="
                    background: #D9D9D9;
                    border-left: 15px solid #00214D;">
                        <h3 class="fw-bolder" style="color: #00214D;">OPUS ACTUS</h3>
                    </div>
                    <div class="row d-flex justify-content-between py-4 mx-0 ">
                        <div class="col-12 col-md-4  ">
                            <div class="card" style="width: 100%;">
                                <img src="assets/img/BANNER.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">RENNE 2023</h5>
                                    <p class="card-text d-flex align-items-center">Le Carrefour des Fournisseurs de
                                        l'Industrie Agroalimentaire (CFIA) est le plus important salon professionnel
                                        français réunissant des équipementiers...
                                    <details>
                                        <summary class="fw-bolder" style="color: aqua;">voir plus</summary>
                                        des fournisseurs et des
                                        prestataires de services de l'Industrie
                                        Agroalimentaire. Les 1 600 fournisseurs du
                                        salon sont répartis en 3 secteurs : Ingrédients
                                        & PAI, Equipements & Procédés et Emballages
                                        & Conditionnements.

                                        OPUS BUYER participera à la 26è édition du 14
                                        au 16 mars 2023.
                                    </details>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4  my-3 my-md-0 ">
                            <div class="card" style="width: 100%;">
                                <img src="assets/img/BANNER.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">RENNE 2023</h5>
                                    <p class="card-text d-flex align-items-center">Le Carrefour des Fournisseurs de
                                        l'Industrie Agroalimentaire (CFIA) est le plus important salon professionnel
                                        français réunissant des équipementiers...
                                    <details>
                                        <summary class="fw-bolder" style="color: aqua;">voir plus</summary>
                                        des fournisseurs et des
                                        prestataires de services de l'Industrie
                                        Agroalimentaire. Les 1 600 fournisseurs du
                                        salon sont répartis en 3 secteurs : Ingrédients
                                        & PAI, Equipements & Procédés et Emballages
                                        & Conditionnements.

                                        OPUS BUYER participera à la 26è édition du 14
                                        au 16 mars 2023.
                                    </details>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-md-flex col-md-4 ">
                            <div class="card" style="width: 100%;">
                                <img src="assets/img/BANNER.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">RENNE 2023</h5>
                                    <p class="card-text d-flex align-items-center">Le Carrefour des Fournisseurs de
                                        l'Industrie Agroalimentaire (CFIA) est le plus important salon professionnel
                                        français réunissant des équipementiers...
                                    <details>
                                        <summary class="fw-bolder" style="color: aqua;">voir plus</summary>
                                        des fournisseurs et des
                                        prestataires de services de l'Industrie
                                        Agroalimentaire. Les 1 600 fournisseurs du
                                        salon sont répartis en 3 secteurs : Ingrédients
                                        & PAI, Equipements & Procédés et Emballages
                                        & Conditionnements.

                                        OPUS BUYER participera à la 26è édition du 14
                                        au 16 mars 2023.
                                    </details>
                                    </p>

                                </div>
                            </div>
                            <!-- <div class="card" style="width: 100%; height: 350px;">
                                <div class="card-header fw-bolder"
                                    style="border-left: 15px solid #00214D; color: #00214D;">SUIVEZ NOUS</div>
                                <div class="card-body" style="width: 100%; height: 50px;">
                                    <div class="d-flex align-items-center my-4">
                                        <div class="flex-shrink-0">
                                            <img class="h-50 w-50" src="assets/img/facebook.svg" alt="...">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            facebook
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center my-4">
                                        <div class="flex-shrink-0">
                                            <img class="h-50 w-50" src="assets/img/instagram.svg" alt="...">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            facebook
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center my-4">
                                        <div class="flex-shrink-0">
                                            <img class="h-50 w-50" src="assets/img/linkedin.svg" alt="...">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            facebook
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center my-4">
                                        <div class="flex-shrink-0">
                                            <img class="h-50 w-50" src="assets/img/twitter.svg" alt="...">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            facebook
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center my-4">
                                        <div class="flex-shrink-0">
                                            <img class="h-50 w-50" src="assets/img/youtube.svg" alt="...">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            facebook
                                        </div>
                                    </div>
                                    
                                </div>
                            </div> -->
                            <!-- <div class=" mx-0 my-0" style="
                    background: #D9D9D9;
                     height: 50px;width: 100%; border: 0.5px solid gray;border-left: 15px solid #00214D;"></div>

                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="  my-5 ">
                    <div class="py-4 px-3" style="
                    background: #D9D9D9;
                    border-left: 15px solid #00214D;">
                        <h3 class="fw-bolder" style="color: #00214D;">OPUS GALERIE</h3>
                    </div>
                    <div class="container-fluid my-1">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card ">
                                <img class=" demo_wrap" alt="100%x280" src="assets/img/BANNER.jpg">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img class="" alt="100%x280" src="assets/img/BANNER.jpg">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img class="" alt="100%x280" src="assets/img/BANNER.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card ">
                                <img class=" demo_wrap" alt="100%x280" src="assets/img/BANNER.jpg">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img class="" alt="100%x280" src="assets/img/BANNER.jpg">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img class="" alt="100%x280" src="assets/img/BANNER.jpg">
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- <div class=''>
                        <section class="pt-5 pb-5">
                            <div class="">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="row">
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card ">
                                                                <img class=" demo_wrap" alt="100%x280" src="assets/img/BANNER.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card">
                                                                <img class="" alt="100%x280" src="assets/img/BANNER.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card">
                                                                <img class="" alt="100%x280" src="assets/img/BANNER.jpg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="row">
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card">
                                                                <img class="" alt="100%x280" src="assets/img/img-slide/banner-3.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card">
                                                                <img class="" alt="100%x280" src="assets/img/img-slide/banner-3.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card">
                                                                <img class="" alt="100%x280" src="assets/img/img-slide/banner-3.jpg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <script type='text/javascript'></script>
                    </div>
                </div> -->
                    <!-- <div style="text-align: center;">

                        <span class="dot btn-primary" href="#carouselExampleIndicators2" role="button" data-slide="prev"></span>
                        <span class="dot btn-primary" href="#carouselExampleIndicators2" role="button" data-slide="next"></span>
                    </div> -->
                    <section class="my-5" id="contact">
                        <div class="container-fluid  ">
                            <div class="section_title mx-5 mx-md-5 ">
                                <h2 class="titre">CONTACTEZ NOUS</h2>
                                <div class="souligne"></div>
                                <div class="row my-5 d-flex justify-content-center ">
                                    <div class="col-12 col-md-6  ">
                                        <div class="Coordonees-boxs  my-lg-5">
                                            <div class="d-flex justify-content-center ">
                                                <img src="../sweb/assets/icons/location.png" alt="" class="icons-contact mt-3">
                                            </div>
                                            <h5 class="card-titres my-3 fw-bold d-flex justify-content-center">
                                                ADDRESS
                                            </h5>
                                            <p class="p-contact" style="padding: 0.5rem!important;">
                                                Dakar, Mariste, Senegal</p>
                                        </div>
                                        <div class="mail-call-container">
                                            <div class="Coordonees-boxs  Coordonees-boxs-mail-call">
                                                <div class="d-flex justify-content-center my-2">
                                                    <img src="../sweb/assets/icons/email.png" alt="" class="icons-contact">
                                                </div>
                                                <h5 class="card-titres my-3 fw-bold d-flex justify-content-center">
                                                    EMAIL
                                                </h5>
                                                <a href="mailto:contact@opusbuyer.com" class="d-flex justify-content-center p-contact">contact@opusbuyer.com</a>
                                                <a href="mailto:adv@opusbuyer.com" class="d-flex justify-content-center p-contact" style="padding: 0.5rem!important;">adv@opusbuyer.com</a>
                                            </div>
                                            <div class="Coordonees-boxs Coordonees-boxs-mail-call">
                                                <div class="d-flex justify-content-center my-2">
                                                    <img src="../sweb/assets/icons/telephone-call.png" alt="" class="icons-contact">
                                                </div>
                                                <h5 class="card-titres my-3 fw-bold d-flex justify-content-center">
                                                    TELEPHONE
                                                </h5>
                                                <div>
                                                </div>
                                                <a href="tel:+221770934213" class="d-flex justify-content-center w-100 p-contact">+221
                                                    77 093 42
                                                    13</a>
                                                <a href="tel:+221764029350" class="d-flex justify-content-center p-contact" style="padding: 0.5rem!important;">+221 76 402 93 50</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 my-5 my-md-0 Coordonees-boxs">
                                        <div class="">
                                            <div class=" container">
                                                <div class="">
                                                    <h5 class="card-titres my-3 fw-bold d-flex justify-content-center">
                                                        FAIRE UN DEVIS
                                                    </h5>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </symbol>
                                                </svg>
                                                <div class="alert alert-success alert-dismissible fade show d-none" role="alert" id="flash">
                                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                                        <use xlink:href="#check-circle-fill" />
                                                    </svg>
                                                    <strong>Envoyé !</strong> Merci de nous avoir contacter M(me) <span class="fw-bold" id="flash-recup-name"></span>. Nous vous
                                                    re-contacterons
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                                <form id="myForm" method="POST" action="index.php" class="">
                                                    <div class="mb-1">
                                                        <label for="nom" class="form-label p-contact">Prenom &
                                                            Nom</label>
                                                        <input type="texte" class="form-control" name="nom" id="Nom" required>
                                                        <div id="NomAlert" class="form-text"></div>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email" class="form-label p-contact">Email</label>
                                                        <input type="email" class="form-control" name="email" id="Email" required>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="Telephone" class="form-label p-contact">Telephone</label>
                                                        <input type="number" class="form-control" name="Telephone" id="Telephone" required>
                                                        <div id="TelephoneAlert" class="form-text"></div>
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="Societe" class="form-label p-contact">Societe</label>
                                                        <input type="texte" class="form-control" name="Societe" id="Societe">
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="Textarea" class="form-label p-contact">Message</label>
                                                        <textarea class="form-control" name="Message" id="Textarea" required></textarea>
                                                        <div id="TextareaAlert" class="form-text"></div>
                                                    </div>
                                                    <div class=" d-flex justify-content-center">
                                                        <div class=" align-items-bottom my-4">
                                                            <input class="btn" type="submit" id="submit" value="Envoyer">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
    </section>

    <footer>
        <div style="margin-inline: 60px;">
            <div class="d-flex justify-content-between">
                <div class="text-start text-light p-4 ">
                    © 2021 Copyright :
                    <a class="fw-bold text-light" href="index.html">Opus Buyer. </a>
                    all right reserved.
                </div>
                <div class="p-4">
                    <a class="text-start text-light fw-bold" href="index.html" type="button">Acceuil</a><a class="text-start text-light p-4" href="#">Termes d’utilisation </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/main.js"></script>
    <script src="assets\js\contact.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>