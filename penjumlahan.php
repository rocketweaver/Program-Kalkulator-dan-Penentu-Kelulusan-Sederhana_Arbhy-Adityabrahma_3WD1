<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan</title>
    <style>
        * {
            font-family: sans-serif;
        }

        body {
            position: relative;
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            background: #68BB59
        }

        h1 {
            text-align: center;
        }

        span {
            display:inline-block;
            margin: 10px 20px
        }

        input {
            padding: 5px;
        }

        input[type=text] {
            margin-top: 30px
        }

        input[type=submit] {
            display: block;
            width:100%;
            background: #68BB59;
            color: white;
            border: none;
            outline: none;
            padding: 10px
        }

        .form-aritmatika {
            padding: 40px 80px 60px 80px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            width: fit-content;
            border-radius: 6px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white
        }

        p{
            margin-top: 20px;
            text-align: center
        }

        #operasi {
            border: none;
            margin: 0 10px
        }
    </style>
</head>
<body>
    <div class="form-aritmatika">
        <h1>Operasi Aritmatika</h1>
        <form action="penjumlahan.php" method="post">
            <input type="text" name="angka1" id="angka1" placeholder="Angka ke-1">
            <select id="operasi" name="operasi">
                <option value="pilih_operasi" selected="true" disabled>Pilih Operasi</option>
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="text" name="angka2" id="angka2"  placeholder="Angka ke-2"><br><br>
            <input type="submit" value="Submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve form data
                $angka1 = (int) $_POST["angka1"];
                $angka2 = (int) $_POST["angka2"];
                $operasi = $_POST["operasi"];
                $hasil = 0;
                
                if($operasi == "tambah") {
                    $hasil = $angka1 + $angka2;
                } 
                
                if($operasi == "kurang") {
                    $hasil = $angka1 - $angka2;
                } 
                
                if($operasi == "kali") {
                    $hasil = $angka1 * $angka2;
                } 
                
                if($operasi == "bagi") {
                    $hasil = $angka1 / $angka2;
                }

                // Display the submitted data
                echo "<p>Hasil: <b>" . $hasil . "</b></p>";
            }
        ?>
    </div>

</body>
</html>