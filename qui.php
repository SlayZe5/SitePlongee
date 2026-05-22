<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USSA Plongée</title>

  <!-- Police d'écriture -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  
</head>

<body>
  <br>
  <br>
  <h2 id="titre">Qui sommes-nous ?</h2>
  <section id="Quisommes">
    <p>
      Notre club est ouvert à tous ceux qui souhaitent découvrir cette discipline.
      Tous les mercredis soirs vous pouvez pratiquer le tir sur cible.
      Tous les jeudis soirs nous organisons différents types de séance.
      Cela va du passage des différents niveaux, du perfectionnement en palmage, des baptêmes.
      Et bien sûr dans la bonne humeur et la bienveillance.
    </p>
    <img src="img/nous.png" id="nouss"/>

  </section>

  <section class="information">
    <h2 id="titre">Informations</h2>
    <p>
      La vocation de l'association est de promouvoir la pratique des activités subaquatiques.
      Elle s'adresse aussi bien aux personnes qui souhaitent découvrir la plongée qu'aux plongeurs confirmés.
      L'association est constituée d'une quarantaine de cadres pour la plongée et le tir sur cible. 
      Le niveau d'encadrement s'échelonne du responsable de bassin à l'Instructeur National et permet d'assurer en toute sécurité la formation des plongeurs de tous niveaux.
    </p>
  </section>
  <script>
    /* Surbrillance des boutons  */
    const links = document.querySelectorAll("nav a");
    links.forEach(link => {
      link.addEventListener("click", () => {
        links.forEach(l => l.classList.remove("active"));
        link.classList.add("active");
      });
    });
  </script>
<?php
$title = "<title>USSA Plongee</title>";
$content2 = "";
include 'layout.php';
?>
</body>
</html>