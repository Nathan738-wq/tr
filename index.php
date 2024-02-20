<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
</head> 
<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h2>Nat</h2></div>
        <div class="search-box">
    <form action="">
        <input type="text" name="search" id="srch" placeholder="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </from>
</div>
<ul>
    <li><a href="index.php?modul=home">Home</a></li>
    <li><a href="index.php?modul=product">Product</a></li>
    <li><a href="index.php?modul=blog">Blog</a></li>
    <li><a href="index.php?modul=contact">Contact</a></li>
    <li>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </li>
</ul>
<div class="menu">
    <label for="chk1">
        <i class="fa fa-bars"></i>
    </label>
    </header>
    <div id="main-content">
    <?php
    if(isset($_GET['modul'])){
        $pages = $_GET['modul'];
    }else{
        $pages = "home";
    }
    if(!isset($_GET['modul']) || $pages == "home"){
    ?>
    <div id="content-home">
        <h1>Title Home</h1>
        <br>
        <p>Selamata datang di rumah resttu</p>
        <p>jeriko ada aldi ada nando ada</p>
        <p>ibnu ada hilal ada onel ada</p>
        <p>rehan ada bagas ada panjie ada.</p>
    </div>
    <?php
    }
    if($pages == "product"){
    ?>
        <div id="content-product">
        <h1>Title Product</h1>
        <br>
        <p>Selamata datang di rumah resttu</p>
        <p>jeriko ada aldi ada nando ada</p>
        <p>ibnu ada hilal ada onel ada</p>
        <p>rehan ada bagas ada panjie ada.</p>
        <a href="index.php?modul=product1ku">Product 1</a><br>
        <a href="index.php?modul=product2ku">Product 2</a><br>
        <a href="index.php?modul=product3ku">Product 3</a>
    </div>
    <?php
    }
    if($pages == "blog"){
    ?>
        <div id="content-blog">
        <h1>Title Blog</h1>
        <br>
        <p>Selamata datang di rumah resttu</p>
        <p>jeriko ada aldi ada nando ada</p>
        <p>ibnu ada hilal ada onel ada</p>
        <p>rehan ada bagas ada panjie ada.</p>
    </div>
    <?php
    }
    if($pages =="contact"){
    ?>
        <div id="content-contact">
        <h1>Title Contact</h1>
        <br>
        <p>Selamata datang di rumah resttu</p>
        <p>jeriko ada aldi ada nando ada</p>
        <p>ibnu ada hilal ada onel ada</p>
        <p>rehan ada bagas ada panjie ada.</p>
        <a href="index.php?modul=aboutme">Tentang Saya</a>
    </div>
    <?php
    }
    if($pages == "aboutme"){
    
    ?>
    <div id="content-about">
        <h1>Tentang Saya</h1>
        <label>Nama: Nathan</label><br>
        <label>Kelas: 11 RPL 1</label><br>
        <label>Umur: 16thn</label><br>
        
    </div>
    <?php
    }
    if($pages == "product1ku"){

    ?>
    <div id="content-product">
        <h1>Produk 1</h1>
        <label>bola basket</label><br>
        <label>bola sepak</label><br>
        <label>bola voli</label><br>
        <a href="index.php?modul=product">Kembali</a>
    </div>
    <?php
    }
    if($pages == "product2ku"){
    ?>
    <div id="content-product">
        <h1>Produk 2</h1>
        <label>Kipas</label><br>
        <label>televisi</label><br>
        <label>kulkas</label>><br>
        <a href="index.php?modul=product">Kembali</a>
    <?php
    }
    if($pages == "product3ku"){
    ?>
    <div id="content-product">
        <h1>Produk 3</h1>
        <label>Kursi</label>><br>
        <label>Meja</label>><br>
        <label>Papan</label>><br>
        <a href="index.php?modul=product">Kembali</a>
    <?php
    }
    ?>
    
</body>
</html>