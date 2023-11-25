<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelulusan Mahasiswa</title>

    <style>
        * {
            font-family: sans-serif;
            box-sizing: border-box;
        }

        h1 {
            text-align:center;
        }

        input, label {
            display: block;
        }

        label, input[type=submit] {
            margin-top: 20px;
        }

        input {
            width:100%;
            margin-top: 10px;
            padding: 8px
        }

        input:nth-of-type(5) {
            margin-bottom: 40px
        }

        label:nth-of-type(1) {
            margin-top: 60px
        }

        .form-kelulusan {
            width: 50%;
            margin: 80px auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 40px 80px 60px 80px;
        }
    </style>

</head>
<body>
    <div class="form-kelulusan">
        <h1>Form Kelulusan</h1>
        <form action="hasil_kelulusan.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama">
            <label for="nim">NIM:</label>
            <input type="text" name="nim" id="nim">
            <label for="nilai">Nilai:</label>
            <input type="text" name="nilai" id="nilai">
            <label for="absen">Absen:</label>
            <input type="text" name="absen" id="absen">
            <input type="submit" value="Submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve form data
                $nama = $_POST["nama"];
                $nim = $_POST["nim"];
                $nilai = $_POST["nilai"];
                $absen = $_POST["absen"];

                // Display the submitted data
                echo "Nama: <b>" . $nama . "</b><br><br>";
                echo "NIM: <b>" . $nim . "</b><br><br>";
                echo "Nilai: <b>" . $nilai . "</b><br><br>";
                echo "Absen: <b>" . $absen . "</b><br><br>";

                if($nilai >= 75 && $absen >= 75) {
                    echo "Mahasiswa dinyatakan <b>LULUS</b>.";
                } else {
                    echo "Maaf, Anda <b>belum lulus</b>.";
                }
            }
        ?>
    </div>
</body>
</html>