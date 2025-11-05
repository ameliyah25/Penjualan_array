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

// =====================
// GENERATE JUMLAH BELI YANG SAMA UNTUK SEMUA TABEL
// =====================
$jumlah_beli = array();
for ($i = 0; $i < count($barang); $i++) {
    $jumlah_beli[$i] = rand(1, 10);
}

// =====================
// TABEL 1 - Daftar Barang
// =====================
echo "<div style='display: flex; justify-content: center;'>";
echo "<table style='
    border-collapse: collapse;
    width: 60%;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
'>";
echo "<tr style='background: linear-gradient(135deg, #87CEEB, #4682B4); color: white;'>
        <th style='padding: 15px; text-align: center; font-size: 18px;'>Kode Barang</th>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Nama Barang</th>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Harga Barang</th>
      </tr>";

foreach ($barang as $index => $item) {
    $bg_color = $index % 2 == 0 ? '#F0F8FF' : '#E6F3FF';
    echo "<tr style='background-color: $bg_color;'>";
    // KODE BARANG
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        text-align: center;
        font-size: 16px;
    '>" . $item[0] . "</td>";
    // NAMA BARANG
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 16px;
    '>" . $item[1] . "</td>";
    // HARGA BARANG
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        font-size: 16px;
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    '>Rp " . number_format($item[2], 0, ',', '.') . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";

// =====================
// GARIS PEMISAH ANTAR TABEL
// =====================
echo "<div style='
    width: 80%;
    height: 3px;
    background: linear-gradient(90deg, transparent, #87CEEB, #4682B4, #87CEEB, transparent);
    margin: 40px auto;
    border-radius: 10px;
'></div>";

// =====================
// TABEL 2 - Daftar Pembelian (menggunakan jumlah yang sama)
// =====================
echo "<h2 style='text-align:center; color:#032B44; margin-top:30px;'>Daftar Pembelian</h2>";
echo "<div style='display: flex; justify-content: center;'>";
echo "<table style='
    border-collapse: collapse;
    width: 70%;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
'>";
echo "<tr style='background: linear-gradient(135deg, #87CEEB, #4682B4); color: white;'>
        <th style='padding: 15px; text-align: center; font-size: 18px;'>Kode Barang</th>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Nama Barang</th>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Harga Barang</th>
        <th style='padding: 15px; text-align: center; font-size: 18px;'>Jumlah Beli</th>
      </tr>";

for ($i = 0; $i < count($barang); $i++) {
    $bg_color = $i % 2 == 0 ? '#F0F8FF' : '#E6F3FF';

    echo "<tr style='background-color: $bg_color;'>";
    // KODE BARANG
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        text-align: center;
        font-size: 16px;
    '>" . $barang[$i][0] . "</td>";
    // NAMA BARANG
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 16px;
    '>" . $barang[$i][1] . "</td>";
    // HARGA BARANG
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        font-size: 16px;
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    '>Rp " . number_format($barang[$i][2], 0, ',', '.') . "</td>";
    // JUMLAH BELI
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        color:#032B44;
        text-align:center;
        font-size: 16px;
        font-weight:bold;
    '>" . $jumlah_beli[$i] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";

// =====================
// GARIS PEMISAH ANTAR TABEL
// =====================
echo "<div style='
    width: 80%;
    height: 3px;
    background: linear-gradient(90deg, transparent, #87CEEB, #4682B4, #87CEEB, transparent);
    margin: 40px auto;
    border-radius: 10px;
'></div>";

// =====================
// TABEL 3 - Daftar Pembelian + Total Harga (menggunakan jumlah yang sama)
// =====================
echo "<h2 style='text-align:center; color:#032B44; margin-top:30px;'>Total Belanja</h2>";
echo "<div style='display: flex; justify-content: center;'>";
echo "<table style='
    border-collapse: collapse;
    width: 80%;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
'>";
echo "<tr style='background: linear-gradient(135deg, #87CEEB, #4682B4); color: white;'>
        <th style='padding: 15px; text-align: center; font-size: 18px;'>Kode Barang</th>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Nama Barang</th>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Harga Barang</th>
        <th style='padding: 15px; text-align: center; font-size: 18px;'>Jumlah Beli</th>
        <th style='padding: 15px; text-align: center; font-size: 18px;'>Total Harga</th>
      </tr>";

$total_belanja = 0;
for ($i = 0; $i < count($barang); $i++) {
    $total = $barang[$i][2] * $jumlah_beli[$i];
    $total_belanja += $total;
    $bg_color = $i % 2 == 0 ? '#F0F8FF' : '#E6F3FF';

    echo "<tr style='background-color: $bg_color;'>";
    // KODE BARANG
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        text-align: center;
        font-size: 16px;
    '>" . $barang[$i][0] . "</td>";
    // NAMA BARANG
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 16px;
    '>" . $barang[$i][1] . "</td>";
    // HARGA BARANG
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        color:#032B44;
        font-weight:bold;
        font-size: 16px;
    '>Rp " . number_format($barang[$i][2], 0, ',', '.') . "</td>";
    // JUMLAH BELI
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        color:#032B44;
        text-align:center;
        font-size: 16px;
        font-weight:bold;
    '>" . $jumlah_beli[$i] . "</td>";
    // TOTAL HARGA
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        color:#032B44;
        text-align:right;
        font-size: 16px;
        font-weight:bold;
    '>Rp " . number_format($total, 0, ',', '.') . "</td>";
    echo "</tr>";
}

// baris total belanja keseluruhan
echo "<tr style='background: #E0FFFF; font-weight:bold; color:#032B44;'>
        <td colspan='4' style='padding: 15px; text-align: right; border-top: 2px solid #87CEEB;'>Total Belanja Keseluruhan :</td>
        <td style='padding: 15px; text-align: right; border-top: 2px solid #87CEEB;'>Rp " . number_format($total_belanja, 0, ',', '.') . "</td>
      </tr>";

echo "</table>";
echo "</div>";

// =====================
// GARIS PEMISAH ANTAR TABEL
// =====================
echo "<div style='
    width: 80%;
    height: 3px;
    background: linear-gradient(90deg, transparent, #87CEEB, #4682B4, #87CEEB, transparent);
    margin: 40px auto;
    border-radius: 10px;
'></div>";

// =====================
// TABEL 4 - FAKTUR PEMBELIAN (menggunakan jumlah yang sama)
// =====================
echo "<h2 style='text-align:center; color:#032B44; margin-top:30px;'>FAKTUR PEMBELIAN</h2>";
echo "<div style='display: flex; justify-content: center;'>";
echo "<table style='
    border-collapse: collapse;
    width: 80%;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
'>";

// Header Faktur
echo "<tr style='background: linear-gradient(135deg, #87CEEB, #4682B4); color: white;'>
        <th colspan='5' style='padding: 20px; text-align: center; font-size: 20px;'>FAKTUR POLGAN MART</th>
      </tr>";

echo "<tr style='background: #E6F3FF;'>
        <td colspan='5' style='padding: 15px; text-align: center; color: #032B44; font-weight: bold;'>
          No. Faktur: PM" . date('Ymd') . rand(1000,9999) . "<br>
          Tanggal: " . date('d/m/Y') . " | Waktu: " . date('H:i:s') . "
        </td>
      </tr>";

echo "<tr style='background: linear-gradient(135deg, #87CEEB, #4682B4); color: white;'>
        <th style='padding: 15px; text-align: center; font-size: 18px;'>No</th>
        <th style='padding: 15px; text-align: center; font-size: 18px;'>Kode Barang</th>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Nama Barang</th>
        <th style='padding: 15px; text-align: center; font-size: 18px;'>Jumlah</th>
        <th style='padding: 15px; text-align: right; font-size: 18px;'>Subtotal</th>
      </tr>";

$grand_total = 0;
for ($i = 0; $i < count($barang); $i++) {
    $subtotal = $barang[$i][2] * $jumlah_beli[$i];
    $grand_total += $subtotal;
    $bg_color = $i % 2 == 0 ? '#F0F8FF' : '#E6F3FF';

    echo "<tr style='background-color: $bg_color;'>";
    // NO
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        text-align: center;
        font-weight: bold;
        color: #032B44;
        font-size: 16px;
    '>" . ($i + 1) . "</td>";
    // KODE BARANG
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        text-align: center;
        font-weight: bold;
        color: #032B44;
        font-size: 16px;
    '>" . $barang[$i][0] . "</td>";
    // NAMA BARANG
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 16px;
    '>" . $barang[$i][1] . "</td>";
    // JUMLAH
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        text-align: center;
        color:#032B44;
        font-size: 16px;
        font-weight:bold;
    '>" . $jumlah_beli[$i] . " pcs</td>";
    // SUBTOTAL
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        text-align: right;
        color:#032B44;
        font-size: 16px;
        font-weight:bold;
    '>Rp " . number_format($subtotal, 0, ',', '.') . "</td>";
    echo "</tr>";
}

// Baris Grand Total
echo "<tr style='background: #E0FFFF; font-weight:bold; color:#032B44;'>
        <td colspan='4' style='padding: 15px; text-align: right; border-top: 2px solid #87CEEB; font-size: 18px;'>GRAND TOTAL :</td>
        <td style='padding: 15px; text-align: right; border-top: 2px solid #87CEEB; font-size: 18px; background: #B0E0E6;'>Rp " . number_format($grand_total, 0, ',', '.') . "</td>
      </tr>";

// Footer Faktur
echo "<tr style='background: #F8F8F8;'>
        <td colspan='5' style='padding: 15px; text-align: center; color: #666; font-style: italic;'>
          Terima kasih telah berbelanja di POLGAN MART!
        </td>
      </tr>";

echo "</table>";
echo "</div>";

// =====================
// CETAK TOTAL BELANJA DI BAWAH TABEL 3
// =====================
echo "<div style='
    text-align: center;
    margin: 30px auto;
    padding: 20px;
    background: linear-gradient(135deg, #87CEEB, #4682B4);
    color: white;
    border-radius: 10px;
    width: 50%;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
'>";
echo "<h2 style='margin: 0; font-size: 24px;'>TOTAL BELANJA ANDA</h2>";
echo "<p style='font-size: 32px; font-weight: bold; margin: 10px 0 0 0; text-shadow: 0 2px 4px rgba(0,0,0,0.3);'>Rp " . number_format($total_belanja, 0, ',', '.') . "</p>";
echo "</div>";
?>
