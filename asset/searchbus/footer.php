<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<style>
footer{
    padding:70px;
    display: inline-block;
    background-color: #222;
}
.desc{
    display: flex;
    justify-content: space-between;
    /* padding: 50px; */
}
.desc h5{
    color: white;
    font-size: 17px;
    font-weight: 900;
}
.desc p{
    color: #777;
    font-size: 13px;
    line-height: 20px;
}
.desc h3{
    color: #8490ff;
}
#f1{
    width: 25%;
}
#f2{
    width: 25%;
}
#f3{
    width: 35%;
}
.desc input{
    width: 70%;
    height: auto;
    border-radius: 100px;
    border: 1px solid #777;
    padding: 10px;
    font-size: 13px;
    margin-bottom: 10px;
}
.desc button{
    width: auto;
    height: auto;
    padding: 10px;
    border-radius: 100px;
    background-color: #8490ff;
    border: none;
    color: white;
}
.icon{
    margin: auto;
    display:flex;
    justify-content:space-between;
    width:300px;
}
.icon i{
    cursor:pointer;
    font-size:25px;
    padding:10px;
    border-radius:50%;
    border:2px solid white;
    color:white;
}
.icon i:hover{
    background-color:rgb(132, 144, 255);
}
@media screen and (max-width:668px) {
    .desc{
        display: inline;
    }
    #f1,#f2,#f3{
        width: 80%;
    }
    .icon{
        margin-top: 15px;
    }
}
</style>
<body>
<footer>
    <div class="desc">
        <div id="f1" data-aos="fade-right">
            <h5>Bus Ticket Booking</h5>
            <p>BUS Tickets is the largest online bus ticket booking service in the world. Trusted by more than 8 million customers globally. Bus Tickets offers booking bus tickets through the website.</p>
        </div>
        <div id="f2" data-aos="fade-right">
            <h5>Contact Us</h5>
            <h3>012-0101-111-1001</h3>
            <h3>012-0101-111-1001</h3>
        </div>
        <div id="f3" data-aos="fade-left">
            <h5>Newsletter</h5>
            <p>You can trust us. we only send offers, not a single spam.</p>
            <input type="text" placeholder="Email address"> <a href=""><button>Submit</button></a>
        </div>
    </div>
    <div class="icon" data-aos="fade-down" data-aos-offset="80">
        <i class="fa fa-facebook-f"></i>
        <i class="fa fa-twitter-square"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin-square"></i>
        <i class="fa fa-google"></i>
    </div>
    </footer>
</body>
</html>