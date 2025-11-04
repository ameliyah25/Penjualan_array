<?php
echo "<h1 style='text-align: center; color: white; background: linear-gradient(135deg, #87CEEB, #4682B4); padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);'>--POLGAN MART--</h1>";
echo "<h2 style='text-align:center; color:#032B44; margin-top:30px;'>Daftar Barang</h2>";

$barang = array(
    array("Jaket", 150000),
    array("Kemeja", 50000),
    array("Gamis", 250000),
    array("Celana", 50000),
    array("Sepatu", 150000)
);

// =====================
// TABEL 1 - Daftar Barang
// =====================
echo "<div style='display: flex; justify-content: center;'>";
echo "<table style='
    border-collapse: collapse;
    width: 50%;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
'>";
echo "<tr style='background: linear-gradient(135deg, #87CEEB, #4682B4); color: white;'>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Nama Barang</th>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Harga Barang</th>
      </tr>";

foreach ($barang as $index => $item) {
    $bg_color = $index % 2 == 0 ? '#F0F8FF' : '#E6F3FF';
    echo "<tr style='background-color: $bg_color;'>";
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 16px;
    '>" . $item[0] . "</td>";
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        font-size: 16px;
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    '>Rp " . number_format($item[1], 0, ',', '.') . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";

// =====================
// TABEL 2 - Daftar Pembelian (random jumlah)
// =====================
echo "<h2 style='text-align:center; color:#032B44; margin-top:30px;'>Daftar Pembelian</h2>";
echo "<div style='display: flex; justify-content: center;'>";
echo "<table style='
    border-collapse: collapse;
    width: 50%;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
'>";
echo "<tr style='background: linear-gradient(135deg, #87CEEB, #4682B4); color: white;'>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Nama Barang</th>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Harga Barang</th>
        <th style='padding: 15px; text-align: center; font-size: 18px;'>Jumlah Beli</th>
      </tr>";

for ($i = 0; $i < count($barang); $i++) {
    $jumlah = rand(1, 5);
    $bg_color = $i % 2 == 0 ? '#F0F8FF' : '#E6F3FF';

    echo "<tr style='background-color: $bg_color;'>";
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 16px;
    '>" . $barang[$i][0] . "</td>";
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        font-size: 16px;
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    '>Rp " . number_format($barang[$i][1], 0, ',', '.') . "</td>";
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        color:#032B44;
        text-align:center;
        font-size: 16px;
        font-weight:bold;
    '>" . $jumlah . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";

// =====================
// TABEL 3 - Daftar Pembelian + Total Harga
// =====================
echo "<h2 style='text-align:center; color:#032B44; margin-top:30px;'>Total Belanja</h2>";
echo "<div style='display: flex; justify-content: center;'>";
echo "<table style='
    border-collapse: collapse;
    width: 50%;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
'>";
echo "<tr style='background: linear-gradient(135deg, #87CEEB, #4682B4); color: white;'>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Nama Barang</th>
        <th style='padding: 15px; text-align: left; font-size: 18px;'>Harga Barang</th>
        <th style='padding: 15px; text-align: center; font-size: 18px;'>Jumlah Beli</th>
        <th style='padding: 15px; text-align: center; font-size: 18px;'>Total Harga</th>
      </tr>";

$total_belanja = 0;
for ($i = 0; $i < count($barang); $i++) {
    $jumlah = rand(1, 5);
    $total = $barang[$i][1] * $jumlah;
    $total_belanja += $total;
    $bg_color = $i % 2 == 0 ? '#F0F8FF' : '#E6F3FF';

    echo "<tr style='background-color: $bg_color;'>";
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        font-weight: bold;
        color: #032B44;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 16px;
    '>" . $barang[$i][0] . "</td>";
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        color:#032B44;
        font-weight:bold;
        font-size: 16px;
    '>Rp " . number_format($barang[$i][1], 0, ',', '.') . "</td>";
    echo "<td style='
        padding: 12px 15px;
        border-bottom: 1px solid #B0E0E6;
        color:#032B44;
        text-align:center;
        font-size: 16px;
        font-weight:bold;
    '>" . $jumlah . "</td>";
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
        <td colspan='3' style='padding: 15px; text-align: right; border-top: 2px solid #87CEEB;'>Total Belanja Keseluruhan :</td>
        <td style='padding: 15px; text-align: right; border-top: 2px solid #87CEEB;'>Rp " . number_format($total_belanja, 0, ',', '.') . "</td>
      </tr>";

echo "</table>";
echo "</div>";
?>
