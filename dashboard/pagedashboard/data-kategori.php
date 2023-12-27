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

            <h4>Data Kategori</h4>

            <div class="table-hapus py-4 px-5" id="data-kategori">

            <div class="tambah-berita">
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <a href="#" class="text-decoration-none"><i class="fas fa-upload"></i> Buat Kategori</a>
                </button>
            </div>
            <br>

            <div class="table-output py-4 px-5">
                <div class="row-lg">
                    <table class="table table-hover">
                    <thead style="color: blanchedalmond; background: green;">
                        <tr>
                            <td>ID</td>
                            <td>Judul</td>
                            <td>Kategori</td>
                            <td></td>
                        </tr>
            
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Judul Kategori-1</td>
                            <td>tema-1</td>
                            <td><a href=""><span class="btn btn-primary">edit</span></a>
                            <a href=""><span class="btn btn-danger">hapus</span></a></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Judul Kategori-2</td>
                            <td>tema-2</td>
                            <td><a href=""><span class="btn btn-primary">edit</span></a>
                            <a href=""><span class="btn btn-danger">hapus</span></a></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Judul Kategori-3</td>
                            <td>tema-3</td>
                            <td><a href=""><span class="btn btn-primary">edit</span></a>
                            <a href=""><span class="btn btn-danger">hapus</span></a></td>
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

        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
        
        
      </div>
        <div class="modal-body">
            <div class="row justify-content-start">
                <div class="col-5 col-md-6">
                    <label for="text-input" class="form-control-label">Judul :</label>
                    <input type="text" id="judul" name="judul" placeholder="Masukan judul.." class="form-control form-control-sm">
                </div>
            </div>
            <hr>

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