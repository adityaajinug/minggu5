<?php 
    if (isset($_POST['simpan'])) {
    $nim = $_POST['nim']; 
    $prodi = $_POST['prodi'];

    $tugas= $_POST['tugas'];
    $uts= $_POST['uts'];
    $uas= $_POST['uas'];
    
    }
    // hitung nilai
    $nilai_tugas = $tugas * 0.4;
    $nilai_uts   = $uts * 0.3;
    $nilai_uas   = $uas * 0.3;

    //penjumlahan dari nilai-nilai yang sudah diinput
    $nilai_akhir = $nilai_tugas + $nilai_uts + $nilai_uas;

    // kondisi
    if($nilai_akhir>=85 && $nilai_akhir<=100){
        $ket="Lulus";
        $grade="A";
    }else if($nilai_akhir>=70 && $nilai_akhir<85){
        $ket="Lulus";
        $grade="B";
    }else if($nilai_akhir>=60 && $nilai_akhir<70){
        $ket="Lulus";
        $grade="C";
    }else if($nilai_akhir>=50 && $nilai_akhir<60){
        $ket="Tidak Lulus";
        $grade="D";
    }else {
        $ket="Tidak Lulus";
        $grade="E";
    }
        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
<table border=1>
            <tr align="center">
                <td>Program Studi</td>
                <td>NIM</td>
                <td>Nilai Akhir</td>
                <td>Status</td>
                <td>Catatan Khusus</td>
            </tr>
            
            <tr>
                <td><?= $prodi ?></td>
                <td><?= $nim ?></td>
                <td align=center><?= $nilai_akhir ?></td>
                <td><?= $ket ?></td>
                <td>
                    <?php 
                    
                        if (isset($_POST["check_list"])) {   
                            
                            foreach ($_POST["check_list"] as $check_list) {
                                echo "+ " .$check_list.  "<br>";
                            } 
                        } else{
                            echo "harus pilih checkbox";
                        } 
                        
                    
                    
                    
                    ?>
                </td>
            </tr>
        
        
        
        </table>
</body>
</html>
