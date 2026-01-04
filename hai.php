<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About My Baby</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #D6EFFF, #AECBFA); /* biru muda pastel */
            color: #1565C0; /* biru tua lembut */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            padding: 40px;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 25px;
        }

        p {
            font-size: 1.1em;
            line-height: 1.8;
            max-width: 700px;
        }

        .datetime {
            margin-top: 25px;
            font-style: italic;
            color: #0D47A1;
        }

        button {
            background-color: #1565C0;
            color: white;
            border: none;
            border-radius: 30px;
            padding: 12px 30px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transition: background 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #0B4E9C;
            transform: scale(1.05);
        }

        .fade {
            animation: fadeIn 0.8s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
<?php
if (isset($_POST['mulai'])) {
    // Halaman perkenalan + tanggal
    echo '<div class="fade">';
    echo '<h1>HALLOWWWW SAYANGKUUUUUUUUUU!! 🌊</h1>';
    echo '<p>Halo! Raihan Diash Qoddafi. Pacarku yang paling ganteng, lucu, imut, sabar, sedunia. HIHIHI I LOVE U BABY!
			I hope we last forever, until we get married, have children, and watch our children grow up while waiting for our old age.
			always by my side, baby💙</p>';
    
    date_default_timezone_set("Asia/Jakarta");
    echo '<div class="datetime">';
    echo "Hari ini: " . date("l, d F Y") . "<br>";
    echo "Waktu sekarang: " . date("H:i:s");
    echo '</div><br>';
    
    echo '<form method="post"><button type="submit" name="kembali">Kembali ke Awal</button></form>';
    echo '</div>';
} else {
    // Halaman awal
    echo '<div class="fade">';
    echo '<h1>Hai, Selamat Datang Raihan Diash💙</h1>';
    echo '<form method="post">
            <button type="submit" name="mulai">Klik Sini!</button>
          </form>';
    echo '</div>';
}
?>
</body>
</html>