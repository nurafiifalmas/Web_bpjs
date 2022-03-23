<section>             
    <div class="form">
        <h1>FORM HITUNG</h1>
            <div class="content">
                <div class="form-input">
                    <form action="index.php?p=hitung_bpjs" method="POST">
                        <div class="form-group">
                            <input name="nama" type="text" placeholder="Masukkan Nama Anda" required>
                        </div>
                        <div class="form-group">
                            <input name="perusahaan" type="text" placeholder="Masukkan Perusahaan Anda" required>
                        </div>
                        <div class="form-group">
                            <input name="gaji" type="number" placeholder="Masukkan Gaji Anda" required>
                        </div>
                        <div class="form-group">
                        <select name="program" required>
									<option  selected disabled="">Pilih Program</option>
									<option  value="Jaminan Hari Tua">Jaminan Hari Tua</option>
									<option  value="Jaminan Kecelakaan Kerja">Jaminan Kecelakaan Kerja</option>
                                    <option  value="Jaminan Kematian">Jaminan Kematian</option>
                                    <option  value="Jaminan Pensiun">Jaminan Pensiun</option>
								</select>
                        </div>
                        <div class="submit">
                            <input type="submit" name="hitung" value="Hitung Total">
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <div class="hasil">
        <h1>HASIL HITUNG</h1>
            <div class="content">
                <?php
                if(isset($_POST['hitung'])){                 
                    $opsi = $_POST['program'];
                    
                    switch ($opsi) {
                        case 'Jaminan Hari Tua':
                            echo"<script>alert('Data Disimpan')</script>";
                            $nama = $_POST['nama'];
                            $nama_perusahaan = $_POST['perusahaan'];
                            $gaji = $_POST['gaji'];

                            //Perhitungan JHT
                            $iuran_jht_pribadi = 0.02 * $gaji; // 2% = 2 / 100 = 0,02
                            $iuran_jht_perusahaan = 0.037 * $gaji; // 3,7% = 3,7 / 100 = 0,037
                            $iuran_jht_total = 0.057 * $gaji; // 5,7% = 5,7 / 100 = 0,075

                            echo "  <h2>Jaminan Hari Tua</h2>
                            <a>
                            Nama        : "."$nama"." <br>
                            Perusahaan  : "."$nama_perusahaan"." <br>
                            Gaji        : "."$gaji"." <br></br>

                            tahun 2022 untuk program JHT dibagi antara perusahaan dan pekerja. 
                            Pekerja membayar 2%, sedangkan perusahaan membayar 3,7%.<br></br>

                            Iuran yang dibayar "."$nama"." = Rp"."$iuran_jht_pribadi"." per bulan <br>                            
                            Iuran yang dibayar $nama_perusahaan = Rp"."$iuran_jht_perusahaan"." per bulan <br>
                            Iuran Total "."$nama"." = Rp"."$iuran_jht_total"." per bulan
                            </a>";
                            break;

                        case 'Jaminan Kecelakaan Kerja':
                            echo"<script>alert('Data Disimpan')</script>";                            
                            $nama = $_POST['nama'];
                            $nama_perusahaan = $_POST['perusahaan'];
                            $gaji = $_POST['gaji'];

                            //Perhitungan JKK
                            $iuran_jkk_sangatrendah = 0.0024 * $gaji; // 0,24% = 0,24 / 100 = 0,0024
                            $iuran_jkk_rendah = 0.0054 * $gaji; // 0,54% = 0,54 / 100 = 0,0054
                            $iuran_jkk_sedang = 0.0089 * $gaji; // 0,89% = 0,89 / 100 = 0,0089
                            $iuran_jkk_tinggi = 0.0127 * $gaji; // 1,27% = 1,27 / 100 = 0,0127
                            $iuran_jkk_sangattinggi = 0.0174 * $gaji; // 1,74% = 1,74 / 100 = 0,0174

                            echo "  <h2>Jaminan Kecelakaan Kerja</h2>
                            <a>
                            Nama        : "."$nama"." <br>
                            Perusahaan  : "."$nama_perusahaan"." <br>
                            Gaji        : "."$gaji"." <br></br>
                            </a>
                            <a>
                            karena tiap pekerjaan pasti memiliki risiko kecelakaan kerja yang berbeda-beda, 
                            maka besar iuran untuk tiap risiko pun berbeda-beda. <br></br>
                            </a>
                            <a>
                            Iuran resiko kecelakaan kerja tingkat sangat rendah = Rp"."$iuran_jkk_sangatrendah"." per bulan <br>
                            Iuran resiko kecelakaan kerja tingkat rendah = Rp"."$iuran_jkk_rendah"." per bulan <br>
                            Iuran resiko kecelakaan kerja tingkat sedang  = Rp"."$iuran_jkk_sedang"." per bulan <br>
                            Iuran resiko kecelakaan kerja tingkat tinggi = Rp"."$iuran_jkk_tinggi"." per bulan <br>
                            Iuran resiko kecelakaan kerja tingkat sangat tinggi = Rp"."$iuran_jkk_sangattinggi"." per bulan <br></br>
                            </a>
                            <a>
                            Tingkat risiko ini harus dievaluasi untuk tiap pekerja selama minimal 2 tahun sekali. 
                            Iuran JKK ditanggung sepenuhnya oleh perusahaan.
                            <a/>";
                            break;

                        case 'Jaminan Kematian':
                            echo"<script>alert('Data Disimpan')</script>";
                            $nama = $_POST['nama'];
                            $nama_perusahaan = $_POST['perusahaan'];
                            $gaji = $_POST['gaji'];

                            //Perhitungan JK
                            $iuran_jk = 0.003 * $gaji; // 0,3% = 0,3 / 100 = 0,003

                            echo "  <h2>Jaminan Kematian</h2>
                            <a>
                            Nama        : "."$nama"." <br>
                            Perusahaan  : "."$nama_perusahaan"." <br>
                            Gaji        : "."$gaji"." <br></br>

                            Iuran jaminan kematian seluruhnya ditanggung oleh perusahaan. Biaya iuran per bulannya 
                            adalah 0,3% dari upah sebulan.<br></br>

                            Iuran yang dibayar "."$nama_perusahaan"." = Rp"."$iuran_jk"." per bulan <br> 
                            </a>";
                            break;

                        case 'Jaminan Pensiun':
                            echo"<script>alert('Data Disimpan')</script>";
                            $nama = $_POST['nama'];
                            $nama_perusahaan = $_POST['perusahaan'];
                            $gaji = $_POST['gaji'];

                            //Perhitungan JP
                            if($gaji > 8754600){
                                $iuran_jp_pribadi = 0.01 * 8754600; // 1% = 1 / 100 = 0,01
                                $iuran_jp_perusahaan = 0.02 * 8754600; // 2% = 2 / 100 = 0,02
                                $iuran_jp_total = 0.03 * 8754600; // 3% = 3 / 100 = 0,03    
                            }else{
                                $iuran_jp_pribadi = 0.01 * $gaji; // 1% = 1 / 100 = 0,01
                                $iuran_jp_perusahaan = 0.02 * $gaji; // 2% = 2 / 100 = 0,02
                                $iuran_jp_total = 0.03 * $gaji; // 3% = 3 / 100 = 0,03
                            }

                            echo "  <h2>Jaminan Pensiun</h2>
                            <a>
                            Nama        : "."$nama"." <br>
                            Perusahaan  : "."$nama_perusahaan"." <br>
                            Gaji        : "."$gaji"." <br></br>

                            Besar iuran dari JP adalah 3% dari upah peserta JP. Pembayaran pun dibagi menjadi dua.
                            2% dibayar oleh perusahaan, sedangkan 1% dibayar oleh karyawan.Namun, apabila upah 
                            peserta > Rp8.754.600, upah tetap dianggap Rp8.754.600, alias sisanya tidak dihitung.<br></br>

                            Iuran yang dibayar "."$nama"." = Rp"."$iuran_jp_pribadi"." per bulan <br>                            
                            Iuran yang dibayar "."$nama_perusahaan"." = Rp"."$iuran_jp_perusahaan"." per bulan <br>
                            Iuran Total "."$nama"." = "."$iuran_jp_total"." per bulan
                            </a>";
                            break;
                        default:
                            echo"<script>alert('Pilih Program BPJS Terlebih Dahulu')</script>
                                 <script>location=index.php?p=hitung_bpjs</script>";
                            break;
                    }
                }
                ?>
            </div>
    </div>
    </section>