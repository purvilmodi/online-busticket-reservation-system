<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-family: 'Rubik', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    top: 0;
    
}

header{
    justify-content: space-between;
    display: flex;
    background-color: white;
    top: 0;
    left: 0;
    right: 0;
	padding: 14px 20px;
	position: fixed;
	transition: all 0.5s;
	z-index: 997;
    box-shadow: 0px 15px 10px -15px #111;    
}
header div{
    padding: 0px 50px;
    width: 30%;
}
header div img{
    width: 150px;
}
nav{
    width: 40%;
    display: flex;
    justify-content: space-between;
    padding-right: 120px;
}
nav a{
    padding-top: 5px;
    text-decoration: none;
    font-size: 13px;
    font-weight:bolder;
    color: black;
    transition: 0.5s; 
    
}
nav a:hover{
    color: rgb(10, 100, 218);
    transition: 0.5s; 
    margin-top: -10px;
}
#toggle{
    display: none;
    cursor: pointer;
}
@media screen and (max-width:668px) {
    
    header div img{
        width: 100px;
    }
    nav{
        padding: 0;
        padding-top: 50px;
        display:none;
        position: absolute;
        background-color: rgba(0, 0, 0,0.8);
        width:0;
        height:100%;
        overflow-x: hidden;
        position: fixed;
        display: inline-block;
        top: 0;
        left: 0;
        padding-bottom: 100%;
        transition: 0.3s;
        text-align: center;
     }
     nav a{
        padding: 10px 0;
        display: block;
        color: white;
     }
     nav a:hover{
        margin: 0;
     }
     #toggle{
        width: auto;
        display: block;
        padding: 0;
     }
}
@media screen and (min-width:669px) and (max-width:950px) {
    header div img{
        width: 100px;
    }
    header div{
        width: auto;
    }
    nav{
        margin: 0;
        padding: 0;
        width: 60%;
        padding-right: 20px;
    }
    nav a{
        font-size: 11px;
    }
}
</style>
<body>
    <!-- header part -->

<header>
    <div>
        <img src="http://localhost/bus/img/icon.png" alt="">
    </div>
    
        <nav>
        <a href="http://localhost/bus/index.php">HOME</a>
        <a href="http://localhost/bus/asset/searchbus/inside.php">MAKE BOOKINGS</a>
        <a href="http://localhost/bus/asset/payment/ticket.php">CHECK TICKETS</a>
        <a href="http://localhost/bus/asset/register/register.php">REGISTER</a>
        <a href="http://localhost/bus/asset/login/login.php">LOGIN</a>
    </nav>
<div id="toggle">
        <i class="fa fa-bars" id="lines" onclick="openNav()"></i>
        <i class="fa fa-close" id="cross" style="display: none;" onclick="closeNav()"></i>
    </div>
</header>


</body>
</html>

<script>

function openNav() {
  document.getElementsByTagName("nav")[0].style.width = "230px";
  document.getElementById("lines").style.display = "none";
  document.getElementById("cross").style.display = "block";
}
function closeNav() {
    document.getElementsByTagName("nav")[0].style.width = "0";
  document.getElementById("lines").style.display = "block";
  document.getElementById("cross").style.display = "none";
}

</script>