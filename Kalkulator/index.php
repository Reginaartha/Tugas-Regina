
<?php

// Siapkan Variabel Awal //
$angka1 = "";
$angka2 = "";
$operasi = "+";
$hasil = "";


// Jalankan hanya kalau tombol " Hitung " ditekan 
if (isset ($_POST['hitung'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];

     // Hitung sesuai jumlah oprasi yang dipilih //
     switch ($operasi) {
        case "+";
        $hasil = $angka1 + $angka2;
        break;

        case "-";
        $hasil = $angka1 - $angka2;
        break;
        
        case "*";
        $hasil = $angka1 * $angka2;
        break;

        case "/";
        if ($angka2 == 0){
        $hasil = "Tidak bisa dibagi 0";
        } else {
            $hasil = $angka1 / $angka2;
        }
        break;
        
     }
}

?>

<div class="kotak">
<h1>Kalkulator</h1>
    <form method="post">
     <input type="number" step="any" name="angka1" placeholder="Angka Pertama"
     value="<?php htmlspecialchars($angka1) ?>" required> 
     <select name="operasi">
        <option value="+" <?= $operasi == "+" ? "selected" : "" ?>>+</option>
        <option value="-" <?= $operasi == "-" ? "selected" : "" ?>>-</option>
        <option value="*" <?= $operasi == "*" ? "selected" : "" ?>>*</option>
        <option value="/" <?= $operasi == "/" ? "selected" : "" ?>>/</option>
     </select>
     <input type="number" step="any" name="angka2" placeholder="Angka Kedua"
     value="<?php htmlspecialchars($angka2) ?>" required> 
     <button type="submit" name="hitung" >Hitung</button>
     
</form>
<?php if ($hasil !== ""): ?>
<div class="hasil">
Hasil: <strong><?= $hasil ?></strong>
</div>
<?php endif; ?>