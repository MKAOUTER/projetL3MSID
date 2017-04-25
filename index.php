<?php

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage = isset($_GET['per-page']) ? (int)$_GET['per-page'] : 2;
$start =($page>1) ? ($page * $perpage)- $perpage : 0;

$cnx = new PDO('mysql:host=localhost;dbname=restaurant', 'root', '');

$req1 = "select * from restaurant";
$resultat_row =$cnx->query($req1);


$req = "select * from restaurant LIMIT {$start}, {$perpage}";
$resultats=$cnx->query($req);
$resultats->setFetchMode(PDO::FETCH_OBJ);


$count = $resultat_row->rowCount();

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
      <div class="col-md-8 col-md-offset-2" style="margin-top:5%">

      <table class="table">
        <thead>
          <th>Nom </th>
          <th>Adresse </th>
          <th>Evaluation</th>
        </thead>


          <?php

          while( $ligne = $resultats->fetch() ) {
            echo "<tbody>";
            echo "<td>", $ligne->nom ,"</td>";
            echo "<td>", $ligne->adresse ,"</td>";
            echo "<td>", $ligne->evaluation ,"</td>";
            echo "</tbody>";
          }
          echo "<ul class='pagination'>";

          if($count > $perpage)
          {
    $pages = ceil($count / $perpage);
    for($i=1;$i<=$pages;$i++)
{
  if($page == $i)

           echo "<li><a class='active'>",$i,"</a></li>";
else
{
     echo "<li><a href='index.php?page=",$i,"'>";

            echo "$i";
            echo "</a></li>";
}

}
          }


          echo "</ul>";
?>


      </table>
    </div>



</div>



  </body>
</html>
