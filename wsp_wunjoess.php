<?php
    header('Content-Type: application/json');
	require_once('helper_connect.php');

    $query = "SELECT * FROM product";
    $sql = mysqli_query($db_connect, $query);
    $result = array();

    while($row = mysqli_fetch_array($sql)){
        array_push($result, array(
            'id' => $row['id'],
            'kategori' => $row['kategori'],
            'nama' => $row['nama'],
            'deskripsi' => $row['deskripsi'],
            'berat' => $row['berat'],
            'harga' => $row['harga'],
            'gambar' => $row['gambar'],
            'stock' => $row['stock'],
            'attribut' => array(
                0 => array(
                  'warna' => $row['warna'],
                  'ukuran' => $row['ukuran'],
                  'jenis_bahan' => $row['jenis_bahan'],
                  'motif' => $row['motif'],
                  'penutup' => $row['penutup']
                )
              )
          ));
    }
    echo json_encode(array('product' => $result));
?>