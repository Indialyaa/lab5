<?php
class mobil{
    private $warna;
    private $merk;
    private $harga;

    public function __construct()
    {
        $this->warna="Biru";
        $this->merk="BMW";
        $this->harga="Rp 1.000.000";
    }
    public function gantiWarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }
    public function tampilWarna(){
        echo "Warna mobilnya : ". $this->warna;
    }
}
$a = new mobil();
$b = new mobil();

echo "<b>Mobil Pertama</b><br>";
$a->tampilWarna();
echo "<br> Mobil pertama ganti warna<br>";
$a->gantiWarna("Merah");
$a->tampilWarna();

echo "<br><b>Mobil Kedua</b><br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();
?>