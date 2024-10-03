<?php
class Balok
{
    // deklarasikan atribut-atribut kelas Balok
    private $lebar;
    private $panjang;
    private $tinggi;

    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($panjang,$lebar,$tinggi) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;   
    }
    public function __get($atribut) {
        return $this->$atribut;
    }
    public function __set($atribut, $nilai) {
        $this->$atribut = $nilai;
    }

    // definisikan metode menghitung volume, luas permukaan,
    public function hitungvolume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
    public function hitungluas() {
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }

}

$balok_1 = new Balok(4, 8, 5);
$balok_2 = new Balok(3, 10, 12);
echo "jawaban balok 1 adalah" . $balok_1->hitungvolume() . "<br>";
echo "jawaban balok 1 adalah" . $balok_1->hitungluas() . "<br>";
echo "<br>";
echo "jawaban balok 2 adalah" . $balok_2->hitungvolume() . "<br>";
echo "jawaban balok 2 adalah" . $balok_2->hitungluas();

// contoh output: Balok

// Balok 1
// Volume: 160
// Luas Permukaan: 184

// Balok 2
// Volume: 360
// Luas Permukaan: 372