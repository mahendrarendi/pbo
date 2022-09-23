// gunakan tag html sebagai bahasa markup
<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 3 No.1</title>
</head>
<body>
    
    // tambahkan tag div untuk pengelompokan dan buat class program
    <div class="container">

        // tambahkan tag php untuk menjalankan program php
        <?php
            // buat class program php dengan menyimpan variabel saldo yg menjadi parent
            class Tabungan  {
                protected $saldo;
            }
            // buat class diagram yg menjadi child
            class PengambilanUang extends Tabungan  {
                private $proteksi;

                // membuat fungsi yg di simpan pada variabel saldo
                public function __construct($saldo)
                {
                    $this->saldo=$saldo;
                    $this->proteksi = 1000;
                }
                
                // memanggil fungsi saldo dan memberikan pesan
                public function getSaldo(){
                    return "Uang yang ditabung : " . $this->saldo . "<br> Uang yang diproteksi : " . $this->proteksi;
                } 

                // membuat fungsi untuk melakukan kalkulasi jumlah
                public function ambilUang($jumlah){
                    if($jumlah == 4500){
                        return "Uang yang akan diambil : " . $jumlah . " false <br> Saldo sekarang : " . $this->saldo;
                    }else{
                        return "Uang yang akan diambil : " . $jumlah . " true <br> Saldo sekarang : " . $this->saldo -= $jumlah;
                    }       
                }
            }

            // menampilkan hasil kalkulasi hasil dari tabungan yg tersisa
            $tabungan = new PengambilanUang(5000);
            echo $tabungan->getSaldo();
            echo "<br> ----------------------------------------- <br>";
            echo $tabungan->ambilUang(4500);
            echo "<br> ----------------------------------------- <br>";
            echo $tabungan->ambilUang(2500);
            echo "develop @mahendrarendi";
        ?>
    </div>

</body>
</html>
