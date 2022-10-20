<!--- Nama    : Bagas Syafiq Aero Pradana - NIM     : 21091397064
      Kelas   : B 2021--->
      
<?php 

interface Flyer {
    public function takeOff();
    public function land();
    public function fly();
}

interface Sailer {
    public function dock();
    public function cruise();
}