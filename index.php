<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="aos-master/aos-master/dist/aos.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="img/title.png"/>
    <link rel="stylesheet" href="style.css">
    <title>Yatra</title>    
</head>
<?php
error_reporting(0);
include 'connection.php';
session_start();
$email=$_SESSION['email'];
$sql=mysqli_query($conn,"SELECT * FROM customer where email='$email'")or die(mysqli_error());
$row=mysqli_fetch_array($sql);
$sql1=mysqli_query($conn,"select * from bus");
$row1=mysqli_fetch_array($sql1);
?>
<body>
    <?php
    if (!isset($_SESSION['email'])) 
    {
        include 'header.php';
    }
    else
    {
        include 'header1.php';
    }
    ?>


    <div class="main" >
        <div class="container" data-aos="fade-left" data-aos-duration="3000">
        <h2>Bus Ticket Booking System </h2>
        <p>Now finding bus tickets is easier, you can order online at YATRA. 
            No need to bother going to the terminal or agent office, now you 
            can buy tickets easily. Fast and Easy Booking. Free to Choose Seats. 
            Cheapest Every Day. 24/7 Customer Service. All Classes and Routes. </p>
          <a href="http://localhost/bus/asset/searchbus/inside.php"><button>SEARCH TICKETS</button></a>  
        </div>
    </div>

    <div class="conta">
    <h1>STEPS TO BOOK A BUS TICKET</h1>
</div>

    <div class="cont">

        <div class="box1" data-aos="fade-right" data-aos-duration="1000">
            <img src="img/b1.png" alt="">
            <h4>Select Trip Details</h4>
            <p>Enter the place of depature,destination,travel data and then click 'Search'</p>

        </div>

        <div class="box2" data-aos="fade-down" data-aos-duration="1000">
            <img src="img/b2.png" alt="">
            <h4>Choose your bus and seat</h4>
            <p>Select bus,seat,place and depature,destination,fill in passanger details and click 'payment'</p>

        </div>
        
        <div class="box3" data-aos="fade-left" data-aos-duration="1000">
            <img src="img/b3.png" alt="">
            <h4>Easy payment method</h4>
            <p>Payment can be make via ATM transfer,internet banking</p>
        </div>  
    </div>

<div class="cho-section">
    <div class="image-section">
       
    </div>
    <div class="des-section" data-aos="fade-left" data-aos-duration="1000">
        <h4>Why Choose Us</h4>
        <h1>We Are Experts In Bus Charter Service Company Since 1997</h1>
        <p>We are a leading provider of bus charter services in India.
           Our team consists of experienced professionals who have extensive 
           knowledge about the local market. We offer various types of 
           transportation including.Our team has been in this industry since
            1997 and we are experts inOur team is composed of experienced 
            professionals who are passionate about providing top notch service 
            to Our company is one of the leading service provider in the industry.
             We have been providing our clients. </p>
        <div class="counting">
          <div class="sub-div">
            <div id="icon">
              <i class="fa fa-bus"></i>
            </div>
            <div id="number">
            <span class="counter" data-target="120">0</span>
              <p>Buses Ready</p>
            </div>
          </div>
          <div class="sub-div">
            <div id="icon">
              <i class="fa fa-handshake-o"></i>
            </div>
            <div id="number">
            <span class="counter" data-target="1305">0</span>
              <p>Satisfied Customer</p>
            </div>
          </div>
          <div class="sub-div">
            <div id="icon">
              <i class="fa fa-star"></i>
            </div>
            <div id="number">
            <span class="counter" data-target="1410">0</span>
              <p>Booking Done</p>
            </div>
          </div>
          <div class="sub-div">
            <div id="icon">
              <i class="fa fa-users"></i>
            </div>
            <div id="number">
            <span class="counter" data-target="75">0</span>
              <p>Professional Team</p>
            </div>
          </div>
        </div>
    </div>
</div>
<div id="badge" data-aos="fade-up-right" data-aos-duration="1000">
            <h2>We Provide Best Bus For You</h2>
            <p>We are Provide best service for Bus Trasportion.
              Easily booking and Cancelation are available.Fast Payment is Revoked.
              and Your journey is Secure With us.</p>
        </div>
        <!--==============================Content=================================-->
<div class="why">
    <div class="service">
        <h4>Our Services</h4>
        <h1>We Provide Best Services For You</h1>
        <p> We provide best services for our customers so that they can get their dream trip without any hass</p>
    </div>
</div>
<div class="w-cont" data-aos="fade-up" data-aos-duration="3000">
    <div class="card">
        <i class="fa fa-shield"></i>
        <h5>Safety Guarantee</h5>
        <p>Our website is fully secured with SSL certificate to protect your personal information while booking a ticket online</p>
    </div>
    <div class="card1" id="change">
        <i class="fa fa-tags"></i>
        <h5>Discount & Promo</h5>
        <p>You can easily book a ticket by online and Get a  discount on your trip.</p>
    </div>
    <div class="card">
        <i class="fa fa-id-card-o"></i>
        <h5>Professional Staff</h5>
        <p>  Our staff is well trained to assist you in any way possible during your journey. They are available</p>
    </div>
    <div class="card">
        <i class="fa fa-clock-o"></i>
        <h5>Schedule On Time</h5>
        <p>We are committed to providing our customers with the highest level of service possible. Our team is madeAll our bus are on time to reach the destination place.</p>
    </div>
    <div class="card1">
        <i class="fa fa-mobile"></i>
        <h5>Online Booking</h5>
        <p>You can easily book a ticket by using our website or mobile app. Just download the app from App Store or Google Play.</p>
    </div>
    <div class="card">
        <i class="fa fa-volume-control-phone"></i>
        <h5>24/7 Support</h5>
        <p>If you have any questions or need help with our products, please feel free to contact us. We are here for you!</p>
    </div>
</div>
<?php
include 'footer.php';
?>

<script src="aos-master/aos-master/dist/aos.js"></script>
  <script>
    AOS.init({
    offset:200
    });
  </script>

<!-- counting script -->
<script>
 let section_counter = document.querySelector('#number');
let counters = document.querySelectorAll('.counter');

// Scroll Animation

let CounterObserver = new IntersectionObserver(
  (entries, observer) => {
    let [entry] = entries;
    if (!entry.isIntersecting) return;

    let speed = 200;
    counters.forEach((counter, index) => {
      function UpdateCounter() {
        const targetNumber = +counter.dataset.target;
        const initialNumber = +counter.innerText;
        const incPerCount = targetNumber / speed;
        if (initialNumber < targetNumber) {
          counter.innerText = Math.ceil(initialNumber + incPerCount);
          setTimeout(UpdateCounter, 2);
        }
      }
      UpdateCounter();

      if (counter.parentElement.style.animation) {
        counter.parentElement.style.animation = '';
      } else {
        counter.parentElement.style.animation = `slide-up 0.3s ease forwards ${
          index / counters.length + 0.5
        }s`;
      }
    });
    observer.unobserve(section_counter);
  },
  {
    root: null,
    threshold: window.innerWidth > 768 ? 0.4 : 0.3,
  }
);

CounterObserver.observe(section_counter);
  </script>
</body>
</html>