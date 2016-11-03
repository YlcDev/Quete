

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>représentation - Cornac</title>

    <!--  -->

    <style>

    </style>

</head>
<?php


?>
<body>

<?php include ('header.php') ?>

<div class="container">

    <table>
        <thead> <!-- En-tête du tableau -->
        <tr>
            <th>Heure</th>
            <th>Titre_spectacle</th>
            <th>Artiste</th>
            <th>Image_url</th>
        </tr>
        </thead>
        <tbody> <!-- Corps du tableau -->
        <?php
        include 'source.php';
        foreach ($elts as $elt)
        {
            echo "<tr>";
            foreach ($elt as $clef => $valeur) {
                echo '<td>' . $valeur . '</td>';
            }
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<?php include ('footer.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
</script>

</body>

</html>
