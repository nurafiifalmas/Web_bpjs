<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Website BPJS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/styles.css" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <ul>
                <h2>
                    <b>BPJS's Website</b>
                </h2>
                    <li><a href="index.php?p=beranda">Beranda</a></li>
                    <li><a href="index.php?p=hitung_bpjs">Hitung Iuran BPJS</a></li>
                    <li><a href="index.php?p=urutan">Mengurutkan Angka</a></li>
            </ul>
        </nav>
    </header>

    <?php
		if(@$_GET['p']==""){
			include_once 'beranda.php';
		}
		elseif(@$_GET['p']=="beranda"){
			include_once 'beranda.php';
        }
        elseif(@$_GET['p']=="hitung_bpjs"){
			include_once 'page_hitung.php';
        }
        elseif(@$_GET['p']=="urutan"){
			include_once 'mengurutkan_angka.php';
        }
    ?>
    <footer>
        <div>
            <a>@copyrightRafiif's_WebDeveloper</a>
        </div>
    </footer>
</body>
</html>