<section>             
    <div class="hal_angka">
        <h1>HASIL HITUNG</h1>
            <div class="content">
            <?php
                $angka = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1 ];
                $angka_awal = 0;

                echo "<h1>Urutan Angka Awal</h1>";
                for ($i = 0 ; $i < count($angka); $i++){
                echo"$angka[$i]".", ";
                }
    
                for ($i = 0 ; $i < count($angka); $i++){
                    for ($j = 0; $j < count($angka)-1; $j++) {
                        if ($angka[$j] > $angka[$j+1]) {
                            $angka_awal = $angka[$j];
                            $angka[$j] = $angka[$j+1];
                            $angka[$j+1] = $angka_awal;
                        }
                    }
                }
                echo "<br><br>";
                echo "<h1>Urutan Angka Akhir</h1>";
                for ($i = 0 ; $i < count($angka); $i++){
                    echo"$angka[$i]".", ";
                    }
            ?>
            </div>
    </div>
    </section>