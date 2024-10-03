    <?php

    class Siswa
    {
        // deklarasikan atribut-atribut kelas Siswa
        private $nama;
        private $nisn;
        private $alamat;
        private $Jurusan;
        private $tanggallahir;
        // definisikan metode konstruktor, setter ,dan getter
        public function __construct($nama,$nisn,$alamat,$Jurusan,$tanggallahir) {
            $this->nama = $nama;
            $this->nisn = $nisn;
            $this->alamat = $alamat;
            $this->jurusan = $Jurusan;
            $this->tanggallahir = $tanggallahir;
        }
        public function gettanggallahir() {
        return $this-> $tanggallahir;
        }    
        public function __get($atribut) {
            return $this->$atribut;
        }
        public function __set($atribut, $nilai) {
            $this->$atribut = $nilai;
        }

        // buat metode untuk menghitung umur siswa
        public function hitungUmur() {
            $tanggallahir = datetime::createfromformat('d-m-Y', $this->tanggallahir);
            $today = new datetime(); 
            $umur= $today->diff($tanggallahir);
            return $umur->y;
        }
    }

    // buat dua buah objek siswa
    $siswa_1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "27-11-2004");
    $siswa_2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "13-01-2007");

    $umurbambang = $siswa_1->hitungUmur();
    $umurbahrun = $siswa_2->hitungUmur();

    if($umurbambang > $umurbahrun) {
        echo "bambang lebih tua dibandingkan bahrun";  
    } elseif ($umurbahrun > $umurbambang){
        echo "bahrun lebih tua dibandingkan bambang";
    } else  {
        echo "sorry your laptop is error :(";
    }

    // contoh output:
    // Bambang lebih tua dibandingkan Bahrun.