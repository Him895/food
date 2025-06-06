<!DOCTYPE php>
<php>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Hungerz Den </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Hungerz Den
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="menu.php">Menu <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="book.php">Book Table</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="#">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="" class="order_online">
                Order Online
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Menu
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".burger">Burger</li>
        <li data-filter=".pizza">Pizza</li>
        <li data-filter=".pasta">Pasta</li>
        <li data-filter=".fries">Fries</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/pizza1.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Farmland Pizza
                  </h5>
                  <p>
                    Our Farmland Pizza is crafted with a perfectly baked homemade crust that is both crispy and soft, providing the ideal base for an explosion of flavors. Topped with zesty tomato sauce made from sun-ripened tomatoes, the pizza is layered generously with our house-blended mozzarella and provolone cheeses, ensuring each slice is cheesy perfection.
                  </p>
                  <div class="options">
                    <h6>
                    ₹350
                    </h6>
                    <form action="order.php" method="POST" class="d-flex align-items-center">
                    <form action="order.php" method="POST">
  <input type="hidden" name="item_name" value="farmland pizza">
  <input type="hidden" name="item_price" value="350">
  <input type="number" name="item_qty" value="1" min="1" class="form-control" style="width: 70px; margin-right: 7px;">
  <button type="submit" name="add_to_cart" class="btn btn-success">Order</button>
</form>
                      
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/burger1.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Double cheese Burger
                  </h5>
                  <p>
                    This double patty beemer is an absolute delight for meat lovers! A burger specially grilled to serve your desi taste buds, freshly grilled chicken patty smothered with a thick layer of tangy tandoori sauce served on our toasted high-fibre buns.
                  </p>
                  <div class="options">
                    <h6>
                    ₹200
                    </h6>
                    <form action="order.php" method="POST" class="d-flex align-items-center">
                    <form action="order.php" method="POST">
  <input type="hidden" name="item_name" value="double cheese burger">
  <input type="hidden" name="item_price" value="200">
  <input type="number" name="item_qty" value="1" min="1" class="form-control" style="width: 70px; margin-right: 7px;">
  <button type="submit" name="add_to_cart" class="btn btn-success">Order</button>
</form>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/pizza2.avif" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Chicken cheese Pizza
                  </h5>
                  <p>
                    Delight in the comforting flavors of our Savory Chicken Cheese Burger—a classic favorite reimagined with gourmet flair. This burger is the perfect blend of juicy grilled chicken, rich cheese, and fresh vegetables, creating a satisfying meal you'll love.
                  </p>
                  <div class="options">
                    <h6>
                    ₹250
                    </h6>
                    <form action="order.php" method="POST" class="d-flex align-items-center">
                    <form action="order.php" method="POST">
  <input type="hidden" name="item_name" value="chicken cheese pizza">
  <input type="hidden" name="item_price" value="250">
  <input type="number" name="item_qty" value="1" min="1" class="form-control" style="width: 70px; margin-right: 7px;">
  <button type="submit" name="add_to_cart" class="btn btn-success">Order</button>
</form>
                      
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/pasta1.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    White Sauce Pasta
                  </h5>
                  <p>
                    white sauce penne pasta recipe is rich, creamy, absolutely delicious, and loaded with vegetables. Made on the stovetop in under 30 minutes, it is perfect for a weeknight dinner or lunch box.
                  </p>
                  <div class="options">
                    <h6>
                    ₹260
                    </h6>
                    <form action="order.php" method="POST" class="d-flex align-items-center">
                    <form action="order.php" method="POST">
  <input type="hidden" name="item_name" value="white sauce pasta">
  <input type="hidden" name="item_price" value="260">
  <input type="number" name="item_qty" value="1" min="1" class="form-control" style="width: 70px; margin-right: 7px;">
  <button type="submit" name="add_to_cart" class="btn btn-success">Order</button>
</form>
                     
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all fries">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/french1.avif" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    French Fries
                  </h5>
                  <p>
                    French fries, or simply fries, also known as Belgian fries, chips, and finger chips, are batonnet or julienne-cut deep-fried potatoes of disputed origin. They are prepared by cutting potatoes into even strips, drying them, and frying them, usually in a deep fryer. Pre-cut, blanched, and frozen russet potatoes are widely used, and sometimes baked
                  </p>
                  <div class="options">
                    <h6>
                    ₹100
                    </h6>
                    <form action="order.php" method="POST" class="d-flex align-items-center">
                    <form action="order.php" method="POST">
  <input type="hidden" name="item_name" value="French fries">
  <input type="hidden" name="item_price" value="100">
  <input type="number" name="item_qty" value="1" min="1" class="form-control" style="width: 70px; margin-right: 7px;">
  <button type="submit" name="add_to_cart" class="btn btn-success">Order</button>
</form>
                     
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f6.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Cheese Pizza
                  </h5>
                  <p>
                    Crispy, thin-crusted crusted, large deluxe pizza, topped with delicious mozzarella and juicy meats, garnished with thyme leaves and rich Italian-style tomato sauce. Served with grilled vegetables.
                  </p>
                  <div class="options">
                    <h6>
                    ₹170
                    </h6>
                    <form action="order.php" method="POST" class="d-flex align-items-center">
                    <form action="order.php" method="POST">
  <input type="hidden" name="item_name" value="cheese pizza">
  <input type="hidden" name="item_price" value="170">
  <input type="number" name="item_qty" value="1" min="1" class="form-control" style="width: 70px; margin-right: 7px;">
  <button type="submit" name="add_to_cart" class="btn btn-success">Order</button>
</form>
                      
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f7.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    single patty Burger
                  </h5>
                  <p>
                    A hamburger, or simply a burger, is a dish consisting of fillings—usually a patty of ground meat, typically beef—placed inside a sliced bun or bread roll. The patties are often served with cheesse
                  </p>
                  <div class="options">
                    <h6>
                    ₹90
                    </h6>
                    <form action="order.php" method="POST" class="d-flex align-items-center">
                    <form action="order.php" method="POST">
  <input type="hidden" name="item_name" value="single patty burger">
  <input type="hidden" name="item_price" value="90">
  <input type="number" name="item_qty" value="1" min="1" class="form-control" style="width: 70px; margin-right: 7px;">
  <button type="submit" name="add_to_cart" class="btn btn-success">Order</button>
</form>
                     
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f8.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Chicken Burger
                  </h5>
                  <p>
                    Sight: Use visual imagery: "The golden-brown patty sits nestled in a fluffy, golden bun, topped with vibrant greens and colorful tomatoes."
                    Smell: Mention aromas: "The irresistible aroma of grilled chicken and smoky barbecue sauce fills the air."
                    Taste: Activate taste buds: "Experience a burst of flavors, from the rich juiciness of the chicken to the tangy kick of our signature sauce."
                    Touch: Describe textures: "Feel the crunch of fresh toppings and the soft bun yielding to the bite."
                    Sound: Include any engaging sounds, like "Hear the satisfying crunch as you take your first bite."
                    
                  </p>
                  <div class="options">
                    <h6>
                    ₹150
                    </h6>
                    <form action="order.php" method="POST" class="d-flex align-items-center">
                    <form action="order.php" method="POST">
  <input type="hidden" name="item_name" value="chicken burger">
  <input type="hidden" name="item_price" value="150">
  <input type="number" name="item_qty" value="1" min="1" class="form-control" style="width: 70px; margin-right: 7px;">
  <button type="submit" name="add_to_cart" class="btn btn-success">Order</button>
</form>
                      
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f9.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Red Sauce Pasta 
                  </h5>
                  <p>
                    Our handcrafted red sauce boasts ripe San Marzano tomatoes, fragrant garlic, and a hint of fresh basil. Slow-simmered to unlock deep, rich flavors, this vibrant sauce offers a perfect balance of tanginess and sweetness, filling your plate with warmth and tradition. Ideal for drizzling over our handmade pasta or as a dip for our freshly baked breadsticks, it's a true taste of Italy brought right to your table."
                  </p>
                  <div class="options">
                    <h6>
                    ₹210
                    </h6>
                    <form action="order.php" method="POST" class="d-flex align-items-center">
                    <form action="order.php" method="POST">
  <input type="hidden" name="item_name" value="red sauce pasta">
  <input type="hidden" name="item_price" value="210">
  <input type="number" name="item_qty" value="1" min="1" class="form-control" style="width: 70px; margin-right: 7px;">
  <button type="submit" name="add_to_cart" class="btn btn-success">Order</button>
</form>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- end food section -->

  <!-- menu.php -->
  <?php
include 'connection.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<section class="food_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
    
    </div>

    <div class="filters-content">
      <div class="row grid">
        <?php while ($row = $result->fetch_assoc()) { ?>
          <div class="col-sm-6 col-lg-4 all">
            <div class="box">
              <div>
                <div class="detail-box">
                  <h5><?php echo $row['name']; ?></h5>
                  <p><?php echo $row['description']; ?></p>
                  <div class="options">
                    <h6>₹<?php echo $row['price']; ?></h6>
                    <input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
<input type="hidden" name="item_price" value="<?php echo $row['price']; ?>">

<!-- Flex row for qty and button -->
<div class="d-flex mt-2" style="gap: 8px;">
  <input type="number" name="item_qty" value="1" min="1" class="form-control form-control-sm" style="width: 70px;">
  <button type="submit" class="btn btn-success">Order</button>
</div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>



  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Hungerz Den
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://php.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</php>