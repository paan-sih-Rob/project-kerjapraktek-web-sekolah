<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="Admin Dasboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bosstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- font owsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../dashboard/cssdashboard/style.css">
    <link rel="stylesheet" href="../dashboard/cssdashboard/cs-skin-elastic.css">

</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="px-4 py-3">
        
        <div class="container py-4 px-5">

            <h4>Data Galery</h4>

            <div class="table-hapus py-4 px-5" id="data-galery">

            <div class="tambah-berita">
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <a href="#" class="text-decoration-none"><i class="fas fa-upload"></i> Tambah</a>
                </button>
            </div>
            <br>
                <div class="input-group mb-3 input-group-sm">
                    <label class="input-group-text" for="inputGroupSelect01">Pilih Kategori</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Pilih..</option>
                        <option value="1">kategori 1</option>
                        <option value="2">kategori 2</option>
                        <option value="3">kategori 3</option>
                    </select>
                </div>

                <div class="btn btn-primary"><span>Tampilkan</span></div>

            <div class="table-output py-4 px-5">
                <div class="row-lg">
                    <table class="table table-hover">
                    <thead style="color: blanchedalmond; background: green;">
                        <tr>
                            <td>ID</td>
                            <td>Judul</td>
                            <td>Kategori</td>
                            <td colspan="2">Tanggal</td>
                            <td></td>
                        </tr>
            
                    </thead>
                    <tbody>
                        <tr>
                            <td>0001</td>
                            <td>Judul foto-1</td>
                            <td>Pengajian</td>
                            <td><p>20-10-2023</p></td>
                            <td><p><a href=""><span class="btn btn-danger">hapus</span></a>
                            <a href=""><span class="btn btn-primary">edit</span></a></p></td>
                        </tr>
                        <tr>
                            <td>0002</td>
                            <td>Judul foto-2</td>
                            <td>Pengajian</td>
                            <td><p>11-07-2023</p></td>
                            <td><p><a href=""><span class="btn btn-danger">hapus</span></a>
                            <a href=""><span class="btn btn-primary">edit</span></a></p></td>
                        </tr>
                        <tr>
                            <td>0003</td>
                            <td>Judul foto-3</td>
                            <td>17agustus</td>
                            <td><p>17-08-2023</p></td>
                            <td><p><a href=""><span class="btn btn-danger">hapus</span></a>
                            <a href=""><span class="btn btn-primary">edit</span></a></p></td>
                        </tr>
                    </tbody>
                    </table>
                </div>		

            </div>
            </div>
        </div>
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="../dashboard/jsdashboard/widgets.js"></script>
    <script src="../dashboard/jsdashboard/main.js"></script>   
    <script src="../dashboard/jsdashboard/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-xl-down modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
      <div class="float-right">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
            tutup
        </button>
        </div>

        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Galery</h1>
        
        
      </div>
        <div class="modal-body">
            <div class="row justify-content-start">
                <div class="col col-md-4">
                    <label for="text-input" class="form-control-label">Judul :</label>
                    <input type="text" id="judul" name="judul" placeholder="Masukan judul.." class="form-control form-control-sm">
                </div>
                <div class="col col-md-3">
                <label for="datetime-input" class="form-control-label">Tanggal :</label><br>
                <input type="datetime-local" placeholder="masukan tanggal.." class="input-xxlarge"/>
                </div>
            </div>
            <hr>

            <div class="row justify-content-start">
                <div class="col col-md-5">
                    <label for="selectSm" class=" form-control-label">Pilih Kategori :</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Pilih..</option>
                        <option value="1">kategori 1</option>
                        <option value="2">kategori 2</option>
                        <option value="3">kategori 3</option>
                    </select>    
                </div>
                <div class="col">
                    <label for="file-input" class=" form-control-label">Gambar :</label>
                    <input type="file" id="file-input" name="file-input" class="form-control-file">
                </div>
            </div>
            <br>

            <div class="row justify-content-start">
                <div class="col col-md-3">
                <label for="selectSm" class=" form-control-label">Terbitkan : </label>
                        <select name="selectSm" id="selectSm" class="form-select-sm form-select">
                            <option value="0">yes</option>
                            <option value="1">hide</option>
                        </select>
                </div>
            </div>
            <hr>

            <div class="row justify-content-start">
                <div class="col offset-7">
                <span><button class="btn btn-warning" data-bs-dismiss="modal">tambahkan</button></span>
                <span><button class="btn btn-danger" data-bs-dismiss="modal">reset</button></span>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</html>