<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $page_title;?></title>
    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav>
        <a href="#" class="logo">LOGO</a>
        <ul>
          <li><a href="<?php echo base_url();?>">Home</a></li>

          <?php

          if ($page_title == 'Login'){
            echo '<li><a class="nav-button" href="register">Register</a></li>';
          } else if ($page_title == 'Register'){
            echo '<li><a class="nav-button" href="login">Login</a></li>';
          } else if($page_title == 'User Home'){
            echo '<li><a class="nav-button" href="'.base_url().'private_area/logout">Logout</a></li>';
          }else{
            echo '<li><a class="nav-button" href="login">Login</a></li>';
            echo '<li><a class="nav-button" href="register">Register</a></li>';
            echo '<li><a class="nav-button" href="admin">Admin Login</a></li>';
          }
          ?>
        </ul>
      </nav>
    </header>
    
