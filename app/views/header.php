<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="views/css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="icon" href="views/img/by.png">
</head>

<body>
    <div></div>
    <div style="overflow: auto;" class="boxcenter">
        <div class="row">
            <img class="bg1" src="views/img/bg.png">
        </div>
        <div class="row1 mb-3  pt-3">
            <!--  <ul>
                <li><a href="index.php" style="font-size:13pt ;font-weight: bold;">Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu" style="font-size:13pt ;font-weight: bold;">Giới thiệu</a></li>
                <li><a href="index.php?act=lienhe" style="font-size:13pt ;font-weight: bold;">Liên hệ</a></li>
            </ul> -->
            <nav class="navbar navbar-expand-sm " style="background-color: rgb(42, 59, 173);">
                <div class="container-fluid">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav nav justify-content-center mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php" style="font-size: 15pt;color:white ;">TRANG CHỦ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?act=gioithieu" style="font-size: 15pt;color:white ;">TIN TỨC - SỰ KIỆN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?act=lienhe" style="font-size: 15pt;color:white ;">LIÊN HỆ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="controllers/index.php?act=home" style="font-size: 15pt;color:white ;">ADMIN</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?act=addtocart" style="font-size: 15pt;color:white; "><i class="fas fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>