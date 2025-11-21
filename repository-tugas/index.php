<?php
// --- BAGIAN LOGIKA PHP ---

$password_baru = "---"; // Default jika belum digenerate

// Cek apakah tombol "Generate" sudah ditekan?
if (isset($_POST['generate'])) {
    
    // Kumpulan karakter yang boleh dipakai
    $huruf_kecil = 'abcdefghijklmnopqrstuvwxyz';
    $huruf_besar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $angka       = '0123456789';
    $simbol      = '!@#$%^&*?';

    // Gabungkan semua karakter
    $semua_karakter = $huruf_kecil . $huruf_besar . $angka . $simbol;

    // Acak urutan karakter tersebut (shuffling)
    $teracak = str_shuffle($semua_karakter);

    // Ambil 12 karakter pertama sebagai password
    $password_baru = substr($teracak, 0, 12);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Password PHP</title>
    <style>
        /* --- BAGIAN CSS (Tema Dark Mode) --- */
        body {
            background-color: #1e272e;
            color: #d2dae2;
            font-family: 'Courier New', Courier, monospace; /* Font ala hacker */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #2f3640;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,255,0, 0.1); /* Efek glow hijau tipis */
            text-align: center;
            width: 350px;
            border: 1px solid #485460;
        }
        h2 {
            color: #0be881; /* Warna hijau matrix */
            margin-bottom: 5px;
        }
        p { font-size: 14px; color: #808e9b; margin-bottom: 20px; }
        
        .hasil-box {
            background-color: #000;
            color: #0be881;
            font-size: 24px;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            border: 1px dashed #0be881;
            letter-spacing: 2px;
            font-weight: bold;
            word-break: break-all;
        }

        button {
            background-color: #0be881;
            color: #1e272e;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: transform 0.2s;
        }
        button:hover {
            transform: scale(1.05);
            background-color: #05c46b;
        }
        button:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>🔐 Secure Gen</h2>
        <p>Buat password aman dengan PHP</p>

        <div class="hasil-box">
            <?php echo $password_baru; ?>
        </div>

        <form method="post">
            <button type="submit" name="generate">
                ⚡ Buat Password Baru
            </button>
        </form>
    </div>

</body>
</html>