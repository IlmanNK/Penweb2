<?php
class Tes{
    public $nama,
           $merk,
           $warna;
    public function tambahkecepatan(){

        }
    public function kurangikecepatan(){

        }
}

class Produk{
    public $nama = 'ini nama',
            $jenis = 'ini jenis',
            $harga = 9999;
            // const PHI = 3.14?


    public function __construct($nama, $jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    // public function Harga(){
        // return self ::PHI;
    

    public function Harga(){
        return $this->harga;
    }
}

// $produk1 = new Produk();
// $produk1->nama = 'KAOS';
// $produk1->jenis = 'Baju';
// $produk1->tambahproperti = 'ini properti baru';
// var_dump($produk1);

$produk2 = new Produk('BAJU HITAM POLOS', 'KAOS', 15000);
echo "Produk 2 : $produk2->nama, $produk2->jenis, $produk2->harga";
echo "<br>";
echo "Harga : " . $produk2->Harga();


$produk3 = new Produk("HOODIE HITAM POLOS", "JAKET", 185000);
echo "<br>";
echo "Produk 3 : " . $produk3->nama, $produk3->jenis;
echo "<br>";
echo "Harga : ". $produk3->Harga();

?>