<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login system</title>
    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-size: 62.5%;
    font-family: "Poppins", sans-serif;
  }
  
  header {
    background: rgb(34, 34, 34);
    width: 100vw;
  }
  
  nav {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    width: 90vw;
    height: 10vh;
    margin: 0 auto;
    background: rgb(34, 34, 34);
  }
  .logo {
    font-size: 1.3rem;
    font-weight: 600;
    letter-spacing: 1px;
  }
  nav ul {
    display: flex;
    justify-content: space-around;
    align-items: center;
  }
  nav ul li {
    margin-right: 2rem;
    list-style: none;
    color: #ffffff;
  }
  a {
    text-decoration: none;
    color: #ffffff;
    padding: 1rem;
    font-size: 0.8rem;
    display: flex;
    align-items: center;
  }
 
  nav form {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  input {
    padding: 0.5rem;
    border-radius: 1px;
    border: none;
  }
  input:focus {
    outline: none;
  }

  .button {
    padding: 0.5rem 1rem;
    border: none;
    background: #7a7a7a;
    color: white;
    border-radius: 1px;
    font-weight: 500;
    transition: 0.2s ease-in-out;
  }
  button:hover {
    background: #c4c4c4;
    color: rgb(0, 0, 0);
  }
  .seperation {
    border-right: 2px solid white;
    height: 6vh;
    padding: 0.5rem;
  }
  
  .log-status {
    text-align: center;
    padding: 2rem;
    background: #dddddd;
    font-size: 1.5rem;
    font-weight: 300;
    color: black;
  }

  .login {
    width: 50vw;
    margin: 0 auto;
  }

  .login input,
  .login button {
    margin-bottom: 1rem;
    border: 1px solid rgb(99, 99, 99);
  }

  .login h1 {
    text-align: center;
    margin: 1.4rem 0rem 1rem 0rem;
    font-size: 1.6rem;
  }
  
  .login form {
    width: 40%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
  }
  .register-button{
    color: black;
    margin: 0 auto;
    text-align: center;
    display:inline-block;
  }

  .signup {
    width: 50vw;
    margin: 0 auto;
  }
  .signup h1 {
    text-align: center;
    margin: 1.4rem 0rem 1rem 0rem;
    font-size: 1.6rem;
  }
  .signup form {
    width: 40%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
  }
  .signup form input,
  .signup form button {
    margin-bottom: 1rem;
    border: 1px solid rgb(99, 99, 99);
  }
  .signuperror, .loginerror{
    text-align: center;
    color: red;
    font-size: 1.2rem;
    font-weight: 300;
    padding-bottom: 1rem;
  }
  .signupsuccess, .loginsuccess{
    text-align: center;
    color: green;
    font-size: 1.2rem;
    font-weight: 300;
    padding-bottom: 1rem;
  }
  
  .loginsuccess, .loginerror{
    margin-top: 1rem;
  }

  .text-danger{
      text-align: center;
  }
  
    </style>
  </head>
  <body>
    <header>
      <nav>
        <a href="#" class="logo">LOGO</a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About me</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
    
