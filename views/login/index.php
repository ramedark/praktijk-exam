<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
  <main class="container">
      <div class="row text-center">
        <div class="col-12">
        <form action="loginsystem.php" method="post">
      <div class="row text-center">
        <div class="col-12">
        </div>
    </div>
    <div class="row">
      <div class="col-3">
      </div>
      <div class="col-6">
      <h1>Login</h1>
         <main class="container">
      <div class="row text-center">
        <div class="col-12">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<br>
    <button type="submit">Login</button>
  </div>
</div>


<a href="<?=URLROOT;?>/homepages/index">terug</a>
