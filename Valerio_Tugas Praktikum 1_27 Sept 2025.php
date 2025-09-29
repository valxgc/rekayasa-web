<?php
// 1. Buat sebuah variabel array, lalu encode ke format JSON.
$data_array = [
    "nama" => "Val",
    "umur" => 20,
    "jurusan" => "Teknik Informatika",
    "hobi" => ["membaca", "programming", "gaming"]
];

$json_string = json_encode($data_array, JSON_PRETTY_PRINT);

// 2. Buat variabel JSON & decode ke Object dan Array
$json_input = '{"nama":"Val","umur":20,"jurusan":"Teknik Informatika","hobi":["membaca","programming","gaming"]}';

$obj = json_decode($json_input);
$arr = json_decode($json_input, true);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 1 - JSON PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: skyblue;
            color: #1a1a1a;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        h1 {
            background: #0077b6;
            color: white;
            padding: 10px 20px;
            border-radius: 12px;
            box-shadow: 0px 2px 6px rgba(0,0,0,0.2);
        }
        .card {
            background: #e0f7fa;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin: 15px;
            width: 70%;
        }
        pre {
            background: #004e64;
            color: #e0f7fa;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
        }
        .section-title {
            font-size: 18px;
            margin-bottom: 10px;
            color: #0077b6;
            border-left: 5px solid #0077b6;
            padding-left: 8px;
        }
    </style>
</head>
<body>
    <h1>Praktikum 1 - Encode & Decode JSON</h1>

    <div class="card">
        <div class="section-title">1. Encode Array ke JSON</div>
        <pre><?php echo $json_string; ?></pre>
    </div>

    <div class="card">
        <div class="section-title">2. Decode ke Object</div>
        <p><strong>Nama:</strong> <?php echo $obj->nama; ?></p>
        <p><strong>Umur:</strong> <?php echo $obj->umur; ?></p>
        <p><strong>Jurusan:</strong> <?php echo $obj->jurusan; ?></p>
        <p><strong>Hobi ke-2:</strong> <?php echo $obj->hobi[1]; ?></p>
    </div>

    <div class="card">
        <div class="section-title">3. Decode ke Array</div>
        <p><strong>Nama:</strong> <?php echo $arr["nama"]; ?></p>
        <p><strong>Umur:</strong> <?php echo $arr["umur"]; ?></p>
        <p><strong>Jurusan:</strong> <?php echo $arr["jurusan"]; ?></p>
        <p><strong>Hobi ke-2:</strong> <?php echo $arr["hobi"][1]; ?></p>
    </div>
</body>
</html>