
<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <title>Form Design</title>
  </head>
  <body>


<section>
    <div class="container mt-8 pt-5">
            <div class="row">
           <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card">
             <div class=card-body>
             <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>             
<form action="" method="post">
<?php
require_once 'inc/utilisateur.inc.php';
require_once 'inc/connect.inc.php';
$db = new db('localhost', 'yoyofood', 'root', '');
$pdo = $db->connect();
$utilisateur = new utilisateur();

if(isset($_POST['btn'])){
    $email=$_POST['email'];
    $mdp=$_POST['motdepasse'];
    $utilisateur->login($email,$mdp,$pdo);
}
?>

    <input type="text" name="email" id="" class="form-control my-4 py-2" placeholder="Email">
    <input type="password" name="motdepasse" id="" class="form-control my-4 py-2" placeholder="Mot de passe">
<div class="text-center mt-3">
    <button class="btn btn-primary" name="btn">Login</button>
    <a href="register.php" class="nav-link" >Cree un Compte</a>
</div>
</form>
             </div>
            </div>
           </div> 
        </div>
    </div>
  </section>
  
 



</body>
</html>