<?php
if (!empty($_POST) && isset($_POST)) {

    $cnx = new PDO('mysql:host=localhost;dbname=restaurant', 'root', '');
    // $cnx = Connexion::getConnex();
    $query = 'INSERT INTO restaurant (nom,adresse,type,evaluation) VALUES  (?, ?, ?,?);';
        $prep = $cnx->prepare($query);
        $prep->bindValue(1, $_POST['nom'] , PDO::PARAM_STR);
        $prep->bindValue(2, $_POST['adresse'] , PDO::PARAM_STR);
        $prep->bindValue(3, $_POST['type'] , PDO::PARAM_STR);
        $prep->bindValue(4, $_POST['evaluation'] , PDO::PARAM_STR);
        $prep->execute();

        header("Location: index.php"); /* Redirect browser */
        exit();
}

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajouter Restaurant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <h1 style="margin-left:35%;color: #337ab7;">Ajouter Restaurant</h1>

    <div class="row">
      <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">

          <form class="" action="" method="post">
           <div class="col-md-2">
             <div class="form-group">
               <label for="">Nom :</label>
               <input type="text" class="form-control" name="nom">
             </div>
           </div>

           <div class="col-md-4">
             <div class="form-group">
               <label for=""> Adresse :</label>
               <input type="text" class="form-control" name="adresse">
             </div>
           </div>

           <div class="col-md-2">
             <div class="form-group">
               <label for=""> Type :</label>
               <input type="text" class="form-control" name="type">
             </div>
           </div>

           <div class="col-md-2">
             <div class="form-group">
               <label for=""> Evaluation :</label>
               <input type="text" class="form-control" name="evaluation" placeholder="... /5">
             </div>
           </div>

           <div class="col-md-2" style="margin-top: 3.3%;">
             <div class="form-group">
             <button type="submit" class="btn btn-primary" name="button">Ajouter</button>
            </div>
           </div>
         </form>

    </div>
   </div>



  </body>
</html>
