<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DHOMS</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Vue/style.css">
    <!-- commentaire -->
</head>

<body>
    <nav>
        <?php include "nav.php"?>
    </nav>

<div id = "header_footer">
    <header>
        <?php include "header.php"?>
    </header>

    <section>
        <div>
            <h3 id="titre_tableau_de_bord">Statistiques d'utilisation :</h3>

            <div id="box_panne_message" >
                <h2 id="titre_statistique">Répartition du déploiment des capteurs :</h2>

                    <?php foreach($liste_categorie as $row):
                        global $temperature;
                        global $lumiere;
                        global $humidite;
                        global $presence;
                        global $store;

                        switch ($row['categorie']) {
                            case 'Température':
                                $temperature+=1;
                                break;
                            case 'Lumière':
                                $lumiere +=1;
                                break;
                            case 'Humidité':
                                $humidite+=1;
                                break;
                            case 'Présence':
                                $presence+=1;
                                break;
                            case 'Store':
                                $store+=1;
                                break;
                        }
                    endforeach;?>

                <div id="panne_message">

                    <table id="stat_capteurs">
                        <tr>
                            <td id="stat_capteurs">Type de Capteur</td>
                            <td id="stat_capteurs">Nombre</td>
                        </tr>
                        <tr>
                            <td id="stat_capteurs">Température</td>
                            <td id="stat_capteurs"><?php echo $temperature ?></td>
                        </tr>
                        <tr>
                            <td id="stat_capteurs">Lumière</td>
                            <td id="stat_capteurs"><?php echo $lumiere ?></td>
                        </tr>
                        <tr>
                            <td id="stat_capteurs">Humidité</td>
                            <td id="stat_capteurs"><?php echo $humidite ?></td>
                        </tr>
                        <tr>
                            <td id="stat_capteurs">Présence</td>
                            <td id="stat_capteurs"><?php echo $presence ?></td>
                        </tr>
                        <tr>
                            <td id="stat_capteurs">Store</td>
                            <td id="stat_capteurs"><?php echo $store ?></td>
                        </tr>
                    </table>
                </div>

                <div id="piechart"></div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    // Load google charts
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    // Draw the chart and set the chart values
                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Type d\'actionneur', 'Nombre déployé'],
                            ['Température', <?php echo $temperature ?>],
                            ['Lumière', <?php echo $lumiere ?>],
                            ['Humidité', <?php echo $humidite ?>],
                            ['Présence', <?php echo $presence ?>],
                            ['Store', <?php echo $store ?>]
                        ]);

                        // Optional; add a title and set the width and height of the chart
                        var options = {
                            width: 800,
                            height: 600,
                            backgroundColor: '#96c0d1',
                            is3D: true
                        };

                        // Display the chart inside the <div> element with id="piechart"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                    }
                </script>
            </div>
        </div>
    </section>

    <footer>
        <?php include "footer.php"?>
    </footer>
</div>

</body>
</html>