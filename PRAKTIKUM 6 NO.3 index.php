<!--- Nama    : Bagas Syafiq Aero Pradana - NIM     : 21091397064
      Kelas   : B 2021--->
<?php 
    require_once 'no 3 prak6.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    <title>Praktikum 6</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto border p-3 mt-2">
                <h4 class="text-center"><strong><u>Soal 3</u></strong></h4>
                <br><br>
                <?= $burung->eat(); ?> <br>
                <?= $manusia->eat(); ?> <br>
                <br>

                <b><?= $airplane2->getMaxLoad() . ' kg'; ?> <br></b>
                <?= $airplane2->addBox(6000) . ' kg'; ?> <br>
                <?= $airplane2->addBox(2000) . ' kg'; ?> <br>
                <?= $airplane2->addBox(7000) . ' kg'; ?> <br>
                <?= $airplane2->addBox(5000) . ' kg'; ?> <br>
                <?= $airplane2->takeOff(); ?> <br>
                <?= $airplane2->fly(); ?> <br>
                <?= $airplane2->land(); ?> <br>

                <?php 
                        echo "Jadi, Butuh Bahan Bakar sebanyak " . $airplane2->calcFuelNeeds() . ' Liter'. '<br>';
                    ?>
                <br>
                <?= $superman2->eat(); ?> <br>
                <?= $superman2->land(); ?> <br>
                <?= $superman2->takeOff(); ?> <br>
                <?= $superman2->fly(); ?> <br>
                <?= $superman2->leapBuilding(); ?> <br>
                <?= $superman2->stopBullet(); ?> <br>
            </div>
        </div>
    </div>
</body>

</html>