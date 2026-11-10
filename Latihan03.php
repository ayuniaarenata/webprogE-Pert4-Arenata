<?php
    //transaksi penjualan peoduk
    $namaproduk = "Baju suka tidur";
    $harga_satuan = 115500;
    $qty = 5;

    // hitung harga yang harus di bayar
    $totalharga = $harga_satuan * $qty;

    //hasil
    echo "Total harga : Rp" . $totalharga;

    // terdapat diskon 5% jika Sub Total lebih dari 500.000
    $ket = "Diskon";
    if( $totalharga > 500.000 ){
        $ket = "Diskon";
    }else{
        ($totalharga < 500.000)
    }

    echo "<br>Keterangan: ". $ket;