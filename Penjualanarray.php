<?php
echo "<h1 style='text-align: center; color: white; background: linear-gradient(135deg, #87CEEB, #4682B4); padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);'>--POLGAN MART--</h1>";
echo "<h2 style='text-align:center; color:#032B44; margin-top:30px;'>Daftar Barang</h2>";

$barang = array(
    array("AK001", "Jaket", 150000),
    array("AK002", "Kemeja", 50000),
    array("AK003", "Gamis", 250000),
    array("AK004", "Celana", 50000),
    array("AK005", "Sepatu", 150000)
);

// JUMLAH BELI
$jumlah_beli = array();
for ($i = 0; $i < count($barang); $i++) {
    $jumlah_beli[$i] = rand(1, 10);
}

// =====================
// TABEL 1 Daftar Barang
// =====================
echo "<div style='display: flex; justify-content: center;'>";
echo "<table style='border-collapse: collapse;width: 60%;background: white;border-radius: 10px;overflow: hidden;box-shadow: 0 4px 8px rgba(0,0,0,0.1);font-family: Arial, sans-serif;'>";
echo "<tr style='background: linear-gradient(135deg, #87CEEB, #4682B4); color: white;'>
        <th style='padding: 15px; text-align: center;'>Kode Barang</th>
        <th style='padding: 15px; text-align: left;'>Nama Barang</th>
        <th style='padding: 15px; text-align: right;'>Harga Barang</th>
      </tr>";

foreach ($barang as $index => $item) {
    $bg_color = $index % 2 == 0 ? '#F0F8FF' : '#E6F3FF';
    echo "<tr style='background-color: $bg_color;'>
        <td style='padding: 12px;text-align:center;font-weight:bold;color:#032B44;'>" . $item[0] . "</td>
        <td style='padding: 12px;text-align:left;font-weight:bold;text-transform:uppercase;color:#032B44;'>" . $item[1] . "</td>
        <td style='padding: 12px;text-align:right;font-weight:bold;color:#032B44;'>Rp " . number_format($item[2], 0, ',', '.') . "</td>
      </tr>";
}
echo "</table></div>";

echo "<div style='width: 80%;height: 3px;background: #87CEEB;margin: 40px auto;border-radius: 10px;'></div>";

// =====================
// TABEL 2 Daftar Pembelian
// =====================
echo "<h2 style='text-align:center; color:#032B44; margin-top:30px;'>Daftar Pembelian</h2>";
echo "<div style='display: flex; justify-content: center;'>";
echo "<table style='border-collapse: collapse;width: 70%;background: white;border-radius: 10px;overflow: hidden;box-shadow: 0 4px 8px rgba(0,0,0,0.1);font-family: Arial, sans-serif;'>";

echo "<tr style='background: linear-gradient(135deg, #87CEEB, #4682B4); color: white;'>
        <th style='padding: 15px; text-align: center;'>Kode Barang</th>
        <th style='padding: 15px; text-align: left;'>Nama Barang</th>
        <th style='padding: 15px; text-align: right;'>Harga Barang</th>
        <th style='padding: 15px; text-align: center;'>Jumlah Beli</th>
      </tr>";

for ($i = 0; $i < count($barang); $i++) {
    $bg_color = $i % 2 == 0 ? '#F0F8FF' : '#E6F3FF';
    echo "<tr style='background-color: $bg_color;'>
        <td style='padding: 12px;text-align:center;font-weight:bold;color:#032B44;'>" . $barang[$i][0] . "</td>
        <td style='padding: 12px;text-align:left;font-weight:bold;text-transform:uppercase;color:#032B44;'>" . $barang[$i][1] . "</td>
        <td style='padding: 12px;text-align:right;font-weight:bold;color:#032B44;'>Rp " . number_format($barang[$i][2], 0, ',', '.') . "</td>
        <td style='padding: 12px;text-align:center;font-weight:bold;color:#032B44;'>" . $jumlah_beli[$i] . "</td>
      </tr>";
}
echo "</table></div>";

echo "<div style='width: 80%;height: 3px;background: #87CEEB;margin: 40px auto;border-radius: 10px;'></div>";

// =====================
// TABEL 3 Total Belanja
// =====================
echo "<h2 style='text-align:center; color:#032B44; margin-top:30px;'>Total Belanja</h2>";
echo "<div style='display:flex;justify-content:center;'>";
echo "<table style='width:80%;border-collapse:collapse;background:white;border-radius:10px;overflow:hidden;box-shadow:0 4px 8px rgba(0,0,0,0.1);font-family:Arial,sans-serif;'>";

echo "<tr style='background:linear-gradient(135deg,#87CEEB,#4682B4);color:white;'>
<th style='padding:15px;text-align:center;'>Kode Barang</th>
<th style='padding:15px;text-align:left;'>Nama Barang</th>
<th style='padding:15px;text-align:right;'>Harga Barang</th>
<th style='padding:15px;text-align:center;'>Jumlah Barang</th>
<th style='padding:15px;text-align:right;'>Total</th></tr>";

$total_belanja = 0;
for ($i = 0; $i < count($barang); $i++) {
    $total = $barang[$i][2] * $jumlah_beli[$i];
    $total_belanja += $total;
    echo "<tr><td style='padding:12px;text-align:center;font-weight:bold;color:#032B44;'>" . $barang[$i][0] . "</td>
    <td style='padding:12px;text-align:left;font-weight:bold;text-transform:uppercase;color:#032B44;'>" . $barang[$i][1] . "</td>
    <td style='padding:12px;text-align:right;font-weight:bold;color:#032B44;'>Rp " . number_format($barang[$i][2], 0, ',', '.') . "</td>
    <td style='padding:12px;text-align:center;font-weight:bold;color:#032B44;'>" . $jumlah_beli[$i] . "</td>
    <td style='padding:12px;text-align:right;font-weight:bold;color:#032B44;'>Rp " . number_format($total, 0, ',', '.') . "</td></tr>";
}

echo "<tr style='background:#E0FFFF;font-weight:bold;color:#032B44;'>
<td colspan='4' style='padding:15px;text-align:right;'>Total Belanja :</td>
<td style='padding:15px;text-align:right;'>Rp " . number_format($total_belanja, 0, ',', '.') . "</td></tr>";

echo "</table></div>";

echo "<div style='width: 80%;height: 3px;background: #87CEEB;margin: 40px auto;border-radius: 10px;'></div>";

// =====================
// TABEL 4 Faktur Belanja
// =====================
echo "<h2 style='text-align:center;color:#032B44;margin-top:30px;'>FAKTUR PEMBELIAN</h2>";
echo "<div style='display:flex;justify-content:center;'>";
echo "<table style='width:80%;border-collapse:collapse;background:white;border-radius:10px;overflow:hidden;box-shadow:0 4px 8px rgba(0,0,0,0.1);font-family:Arial,sans-serif;'>";

echo "<tr style='background:#4682B4;color:white;'><th colspan='5' style='padding:20px;text-align:center;font-size:20px;'>FAKTUR POLGAN MART</th></tr>";

echo "<tr style='background:#E6F3FF;'><td colspan='5' style='padding:15px;text-align:center;font-weight:bold;color:#032B44;'>
No.Faktur: PM" . date('Ymd') . rand(1000,9999) . "<br>Tanggal: " . date('d/m/Y') . " | Waktu: " . date('H:i:s') . "</td></tr>";

echo "<tr style='background:linear-gradient(135deg,#87CEEB,#4682B4);color:white;'>
<th style='padding:15px;text-align:center;'>No</th>
<th style='padding:15px;text-align:center;'>Kode Barang</th>
<th style='padding:15px;text-align:left;'>Nama Barang</th>
<th style='padding:15px;text-align:center;'>Jumlah</th>
<th style='padding:15px;text-align:right;'>Subtotal</th></tr>";

$grand_total = 0;
for ($i = 0; $i < count($barang); $i++) {
    $subtotal = $barang[$i][2] * $jumlah_beli[$i];
    $grand_total += $subtotal;
    echo "<tr><td style='padding:12px;text-align:center;font-weight:bold;color:#032B44;'>" . ($i+1) . "</td>
    <td style='padding:12px;text-align:center;font-weight:bold;color:#032B44;'>" . $barang[$i][0] . "</td>
    <td style='padding:12px;text-align:left;font-weight:bold;text-transform:uppercase;color:#032B44;'>" . $barang[$i][1] . "</td>
    <td style='padding:12px;text-align:center;font-weight:bold;color:#032B44;'>" . $jumlah_beli[$i] . " pcs</td>
    <td style='padding:12px;text-align:right;font-weight:bold;color:#032B44;'>Rp " . number_format($subtotal, 0, ',', '.') . "</td></tr>";
}

echo "<tr style='background:#B0E0E6;font-weight:bold;color:#032B44;'>
<td colspan='4' style='padding:15px;text-align:right;font-size:18px;'>TOTAL BAYAR :</td>
<td style='padding:15px;text-align:right;font-size:18px;'>Rp " . number_format($grand_total, 0, ',', '.') . "</td></tr>";

if ($grand_total < 50000) $persen_diskon = 5;
elseif ($grand_total <= 100000) $persen_diskon = 10;
else $persen_diskon = 20;

$diskon = ($persen_diskon / 100) * $grand_total;
$total_akhir = $grand_total - $diskon;

echo "<tr style='background:#E0FFFF;font-weight:bold;color:#032B44;'>
<td colspan='4' style='padding:15px;text-align:right;'>Diskon ($persen_diskon%):</td>
<td style='padding:15px;text-align:right;'>Rp " . number_format($diskon,0,',','.') . "</td></tr>";

echo "<tr style='background:#F8F8F8;'>
<td colspan='5' style='padding:15px;text-align:center;color:#666;font-style:italic;'>Terima kasih telah berbelanja di POLGAN MART!</td></tr>";

echo "</table></div>";
echo "<div style='width: 80%;height: 3px;background: #87CEEB;margin: 40px auto;border-radius: 10px;'></div>";

// =====================
// TOTAL PEMBAYARAN SETELAH DISKON
// =====================
echo "<h2 style='text-align:center;color:#032B44;margin-top:40px;'>TOTAL PEMBAYARAN</h2>";
echo "<div style='display:flex;justify-content:center; margin-bottom:40px;'>";
echo "<table style='width:50%;border-collapse:collapse;background:white;border-radius:10px;overflow:hidden;
box-shadow:0 4px 8px rgba(0,0,0,0.1);font-family:Arial,sans-serif;'>";

// Header tabel biru muda
echo "<tr style='background:linear-gradient(135deg, #87CEEB, #4682B4);color:white;'>
<th style='padding:15px;text-align:center;font-size:18px;'>Keterangan</th>
<th style='padding:15px;text-align:center;font-size:18px;'>Jumlah</th>
</tr>";

// Total Bayar sebelum diskon
echo "<tr style='background:#F0F8FF;'>
<td style='padding:12px;text-align:left;font-weight:bold;color:#032B44;'>Total Belanja</td>
<td style='padding:12px;text-align:right;font-weight:bold;color:#032B44;'>Rp " . number_format($grand_total, 0, ',', '.') . "</td>
</tr>";

// Diskon
echo "<tr style='background:#E0FFFF;'>
<td style='padding:12px;text-align:left;font-weight:bold;color:#032B44;'>Diskon ($persen_diskon%)</td>
<td style='padding:12px;text-align:right;font-weight:bold;color:#032B44;'>- Rp " . number_format($diskon, 0, ',', '.') . "</td>
</tr>";

// Total Pembayaran
echo "<tr style='background:#ADD8E6;font-weight:bold;color:#032B44;'>
<td style='padding:15px;text-align:left;font-size:18px;'>TOTAL PEMBAYARAN</td>
<td style='padding:15px;text-align:right;font-size:18px;'>Rp " . number_format($total_akhir, 0, ',', '.') . "</td>
</tr>";

echo "</table></div>";

?>
