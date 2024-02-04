<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<header>

    <div id="menu" class="fas fa-bars"></div>
     
    <a href="#" class="logo"><img src="images/logo.png" style="width: 25px"><strong> Factory </strong></a>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#Services">Services</a></li>
            <li><a href="#contact">contact</a></li>
            <li><a href="login.php"><button class="btn">get started</button></a></li>
            
        </ul>
    </nav>

</header>

<!-- header section ends -->

</div>

<!-- home section starts  -->
<video autoplay loop muted plays-inline class="back-video">
  <source src="./images/Inside.mp4" type="video/mp4">
 </video>
<section class="home" id="home">
    <h1>Unlock the potential of</h1>
    <h2>digital transformation in Order Management operations</h2>
    <p>Our Order Management System plays a pivotal role in enhancing customer satisfaction, reducing manual errors, and fostering a more agile and responsive supply chain.</p>
   

    <div class="shape"></div>

</section>
<section class="about" id="about">

    <div class="image">
        <img src="images/about.avif" >
    </div>

    <div class="content">
        <h3>why choose us?</h3>
       
        <a href="#"><button class="btn">learn more</button></a>
    </div>

</section>
<div class="container">
    <div class="timeline">
      <ul>
        <li>
          <div class="timeline-content">
            <h3 class="date">20th may, 2010</h3>
            <h1>Customer Tree View</h1>
            <p>visual representation of customer data in a hierarchical structure, providing a clear and organized way for businesses to understand complex relationships within their customer base.</p>
          </div>
        </li>
        <li>
          <div class="timeline-content">
            <h3 class="date">20th may, 2010</h3>
            <h1>Sales Order Grid,</h1>
            <p>provides a centralized and user-friendly interface for managing and monitoring sales orders efficiently. It is a crucial tool for businesses to maintain control over their sales processes and ensure timely and accurate order fulfillment.</p>
          </div>
        </li>
        <li>
          <div class="timeline-content">
            <h3 class="date">20th may, 2010</h3>
            <h1>Activity State</h1>
            <p>track the progress of sales activities over time. Each activity may have distinct states, such as "not started," "in progress," "completed," or more specific states related to the sales cycle, like "prospecting," "negotiation," or "contract sent."</p>
          </div>
        </li>
        <li>
          <div class="timeline-content">
            <h3 class="date">20th may, 2010</h3>
            <h1>Chart view</h1>
            <p></p>
          </div>
        </li>
      </ul>
    </div>
  </div>
<section class="contact" id="contact">

<h1 class="heading">contact us</h1>

<div class="row">

    <form action="">
        <input type="text" placeholder="full name" class="box">
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <input type="number" placeholder="your number" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="your address"></textarea>
        <input type="submit" class="btn" value="send now">
    </form>
</div>
</section>

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3></h3>
            
        </div>

        <div class="box">
            
        </div>

        <div class="box">
            <h3></h3>
            
        </div>

    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>