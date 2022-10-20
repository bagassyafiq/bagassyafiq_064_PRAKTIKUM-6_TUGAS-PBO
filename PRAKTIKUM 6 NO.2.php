<!--- Nama    : Bagas Syafiq Aero Pradana - NIM     : 21091397064
      Kelas   : B 2021--->

<?php 

require_once 'interface no2 prak6.php';

class Airplane implements Flyer {
    public function takeOff() {
        return 'Pesawat lepas landas..';
    }
    
    public function land() {
        return 'Pesawat mendarat';
    }

    public function fly() {
        return 'Pesawat dalam perjalanan';
    }
}

class Bird implements Flyer {
    public function takeOff() {
        return 'Burung mencari makan';
    }
    
    public function land() {
        return 'Burung kembali pulang';
    }

    public function fly() {
        return 'Burung terbang';
    }

    public function buildNest() {
        return 'Burung membuat sarang';
    }

    public function layEggs() {
        return 'Burung bertelur';
    }
}

class Superman implements Flyer {
    public function takeOff() {
        return 'Superman belajar dengan batman';
    }
    
    public function land() {
        return 'Superman mencoba mempertahankan diri';
    }

    public function fly() {
        return 'Superman memukul sampai jauh';
    }

    public function leapBuilding() {
        return 'Batman kepental ketabrak sepeda yang ada ditengah jalan';
    }

    public function stopBullet() {
        return 'Polisi tembak superman sampai terpental jauh';
    }
}

$airplane = new Airplane;
$bird = new Bird;
$superman = new Superman;