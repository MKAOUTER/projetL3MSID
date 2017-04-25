<?php
$cnx = new PDO('mysql:host=localhost;dbname=restaurant', 'root', '');

if (!empty($_POST) && isset($_POST)) {

  $query = 'select nom,adresse,evaluation from restaurant WHERE type = "' . $_POST['type'] . '" ';
  $resultat=$cnx->query($query);
  $resultat->setFetchMode(PDO::FETCH_OBJ);
}
$req = "select type from restaurant ";
$type=$cnx->query($req);
$type->setFetchMode(PDO::FETCH_OBJ);




 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>


    <h1 style="margin-left:23%;color: #337ab7;">Projet Internet et Base de données</h1>

    <div class="row">
      <div class="col-md-10 col-md-offset-3" style="margin-top: 7%;">
          <form class="" action="chercher.php" method="post">

           <div class="col-md-4">
             <div class="form-group">
               <label for="">Type de Cuisine</label>
               <select class="form-control" name="type">
                 <option value="NULL">Faites Votre Choix</option>
                 <?php
                 while( $ligne = $type->fetch() ) {
                   echo "<option value='", $ligne->type ,"'>", $ligne->type ,"</option>";
                 }
                  ?>
               </select>
             </div>
           </div>

           <div class="col-md-2" style="margin-top:2.3%">
             <div class="form-group">
             <button type="submit" class="btn btn-primary" name="button">Chercher</button>
            </div>
           </div>
         </form>


      </div>

      <div class="col-md-8 col-md-offset-2" style="margin-top:5%">

      <table class="table">
        <thead>
          <th>Nom </th>
          <th>Adresse </th>
          <th>Evaluation</th>
        </thead>


          <?php
if (!empty($_POST) && isset($_POST)) {
          while( $ligne = $resultat->fetch() ) {
            echo "<tbody>";
            echo "<td>", $ligne->nom ,"</td>";
            echo "<td>", $ligne->adresse ,"</td>";
            echo "<td>", $ligne->evaluation ,"</td>";
            echo "</tbody>";
          }
          }
?>


      </table>
    </div>


</div>



  </body>
</html>
