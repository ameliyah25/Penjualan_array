<?php
echo "<h1 style='text-align: center; color: white; background: linear-gradient(135deg, #87CEEB, #4682B4); padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);'>--POLGAN MART--</h1>";

$barang = array(
    array("Kemeja", 50000),
    array("Rok", 35000),
    array("Jilbab", 25000),
    array("Sepatu", 35000),
    array("Jeket", 150000)
);

// Menampilkan data nama barang dan harga barang dalam tabel
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
    $bg_color = $index % 2 == 0 ? '#F0F8FF' : '#E6F3FF'; // Warna biru muda bergantian
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
?>
