<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>LATIHAN MINGGU 5</title>
  </head>
  <body>
  <div class="container">
    <div class="row mt-5">
        <div class="col">
                <form action="proseslat.php" name="inputan" method="post">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nim">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="prodi">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem informasi</option>
                                <option value="Teknik Informatika D3">Teknik Informatika D3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nilai Tugas</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="tugas">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nilai UTS</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="uts">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nilai UAS</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="uas">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Catatan Khusus</label>
                        <div class="form-check mt-2">
                            <div class="col-sm-10">
                                <input class="form-check-input" type="checkbox"  name="check_list[]" value="Kehadiran >=70%" >
                                Kehadiran >=70% 
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                        <div class="form-check mt-2">
                            <div class="col-sm-10">
                                <input class="form-check-input" type="checkbox" name="check_list[]" value="interaktif dikelas">
                                Interaktif dikelas
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                        <div class="form-check mt-2">
                            <div class="col-sm-10">
                                <input class="form-check-input" type="checkbox" name="check_list[]" value="Tidak terlambat mengumpulkan tugas">
                                Tidak terlambat mengumpulkan tugas
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>
                    </div>
                </form>
        </div>
    </div>
  </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>