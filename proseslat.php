<?php 
    if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $a = substr ($nim, 0, 3);
    switch($a) {
        case 'A11' : $prodi = "Teknik Informatika";
        break;
        case 'A12' : $prodi = "Sistem Informasi";
        break;
        case 'A22' : $prodi = "Teknik Informatika D3";
        break;
        default     : $prodi = "Salah jurusan";
    } 
    

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
        $status="Lulus";
        $grade="A";
    }else if($nilai_akhir>=70 && $nilai_akhir<85){
        $status="Lulus";
        $grade="B";
    }else if($nilai_akhir>=60 && $nilai_akhir<70){
        $status="Lulus";
        $grade="C";
    }else if($nilai_akhir>=50 && $nilai_akhir<60){
        $status="Tidak Lulus";
        $grade="D";
    }else {
        $status="Tidak Lulus";
        $grade="E";
    }
        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hasil</title>
</head>
<body>
    <div class="container mt-4">
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Program Studi</th>
                <th scope="col">NIM</th>
                <th scope="col">Nilai Akhir</th>
                <th scope="col">Status</th>
                <th scope="col">Catatan Khusus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><?= $prodi ?></td>
                <td><?= $nim ?></td>
                <td><?= $nilai_akhir ?></td>
                <td><?= $status ?></td>
                <td>
                    <?php 
                    
                    if (!empty($_POST["check_list"])) {   
                        
                        foreach ($_POST["check_list"] as $check_list) {
                            echo "+ " .$check_list.  "<br>";
                        } 
                    } else{
                        echo "harus pilih checkbox";
                    } 
                    
                
                
                
                ?>
                </td>
                </tr>
            </tbody>
        </table>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
