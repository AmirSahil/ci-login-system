<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $page_title;?></title>
    <!-- Font -->
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav>
        <a href="<?php echo base_url();?>private_area" class="logo">LOGO</a>
        <ul>
          <li><a href="<?php echo base_url();?>private_area">Home</a></li>

          <?php

          if ($page_title == 'Login'){
            echo '<li><a class="nav-button" href="'.base_url().'register">Register</a></li>';
            echo '<li><a class="nav-button" href="'.base_url().'admin">Admin Login</a></li>';
          } else if ($page_title == 'Register'){
            echo '<li><a class="nav-button" href="'.base_url().'login">Login</a></li>';
            echo '<li><a class="nav-button" href="'.base_url().'admin">Admin Login</a></li>';
          } else if($page_title == 'User Home' or $page_title == 'User Cart' or $page_title == 'User Checkout' or $page_title == 'Product View' or $page_title == 'Order Placed' or $page_title == 'My Orders'){
            echo '<li><a href="'.base_url().'private_area/myorders">My orders</a></li>';
            ?>
            <li><a class="nav-button" href="<?php echo base_url();?>private_area/cart"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Cart<span class="cart-counter"><?php echo $count_data->num_rows();?></span></a></li>
            <?php
            echo '<li><a class="nav-button" href="'.base_url().'private_area/logout">Logout</a></li>';
          } else{
            echo '<li><a class="nav-button" href="'.base_url().'login">Login</a></li>';
            echo '<li><a class="nav-button" href="'.base_url().'register">Register</a></li>';
            echo '<li><a class="nav-button" href="'.base_url().'admin">Admin Login</a></li>';
          }
          ?>
        </ul>
      </nav>
    </header>
    
