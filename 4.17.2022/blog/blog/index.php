<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content=" ">
        <meta name="author" content="Yunus Emre Vurgun">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Blog : URL ATLAS - Programmer's Directory</title>
<link rel="icon" type="image/png" href="../images/icon.png">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="index.js"></script>
<style>
    #outputField {
        color:white;
        font-family:arial;
        font-size:16px;
        text-align:center;
    }
</style>
</head>
    <body>
<div id="navbar">
    <a class="navbarButton" href="https://www.urlatlas.org"><i class="fa-solid fa-house"></i> Home</a>
    <a class="navbarButton" href="https://www.urlatlas.org/about"><i class="fa-solid fa-circle-info"></i> About</a>
    <a class="navbarButton" href="https://www.urlatlas.org/languages"><i class="fa-solid fa-file-code"></i> Languages</a>
    <a class="navbarButton" href="https://www.urlatlas.org/categories"><i class="fa-solid fa-folder"></i> Categories</a>
    <a class="navbarButton" href="https://www.urlatlas.org/search"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
    <a class="navbarButton" href="https://www.urlatlas.org/support"><i class="fa-solid fa-circle-info"></i> Support</a>
    <a class="navbarButton" href="https://www.urlatlas.org/user-made-lists"><i class="fa-solid fa-list"></i> User-made Lists</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/blog"><i class="fa-solid fa-blog"></i> Blog</a>
    <a class="navbarButton" href="https://www.urlatlas.org/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
    <a class="navbarButton" href="https://www.urlatlas.org/sign-up"><i class="fa-solid fa-user-plus"></i> Sign Up</a>

</div>


<div id="mobileNavbar"><br> <center>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org"><i class="fa-solid fa-house"></i> Home</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/about"><i class="fa-solid fa-circle-info"></i> About</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/languages"><i class="fa-solid fa-file-code"></i> Languages</a><br><br>
    <a class="navbarButton" href="https://www.urlatlas.org/categories"><i class="fa-solid fa-folder"></i> Categories</a><br><br>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/search"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/support"><i class="fa-solid fa-circle-info"></i> Support</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/user-made-lists"><i class="fa-solid fa-list"></i> User-made Lists</a><br><br>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/blog"><i class="fa-solid fa-blog"></i> Blog</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/sign-up"><i class="fa-solid fa-user-plus"></i> Sign Up</a><br><br></center>
</div>
        <div id="header">

            <img id="logo1" src="../images/logo.png">
 
            </div>
<div id="mainDiv"><hr>
<p id='outputField'></p>
<?php

$path = "posts/";
if(is_dir($path)) {
    
    $list = scandir($path);
    echo "<div style='display:none;'><p id='phpPostList'>";
    echo implode(" ",$list);
    echo "</p></div>";
    echo "
    <script>
    
    var txt = document.getElementById('phpPostList').innerText;
    var polish1 = txt.replace('images','');
    var polish2 = polish1.replace('.','');
    var polish3 = polish2.replace('..','');
    var polish4 = polish3.replaceAll(' ','<br><br>');
    var polish5 = polish4.replaceAll('-',' ');
    var polish6 = polish5.replaceAll('posts','<a href=\"#\">');
    var polish7 = polish6.replaceAll('postz','</a>');
    
    


    document.getElementById('outputField').innerHTML=polish7;
   
    
    
    </script>
    
    
    ";
    }
?>
</div>

 <br>
<br><br>
<br>





</div>
<br>
<footer id="footer1">
   <p>URL ATLAS - Programmer's Directory ??? - 2022</p> 
</footer>
     </body>
</html>