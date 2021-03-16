  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengajuna Customers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>/administrator">Home</a></li>
              <li class="breadcrumb-item active">Pengajuan Customers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <!-- <div class="card-header">
              <a href="<?= base_url() ?>/administrator/profile/create">
                <button class="btn btn-success">Create</button>
              </a>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <?php if(!empty(session()->getFlashdata('success'))){ ?>
 
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('success');?>
                </div>   
                 
              <?php } ?>
              <div id="alert-delete"></div>
              <div class="table-responsive">
                <table id="example1" class="table table-striped table-bordered data">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Fisrt Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Jenis Kendaraan</th>
                  <th>Status Kendaraan</th>
                  <th>Tahun Pembuatan</th>
                  <th>No HP</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 1;  ?>
                  <?php foreach($pengajuan as $m) : ?>
                    <tr>
                      <td><?= $no?></td>
                      <td><?= $m['first_name'] ?></td>
                      <td><?= $m['last_name'] ?></td>
                      <td><?= $m['email'] ?></td>
                      <td><?= $m['alamat'] ?></td>
                      <td><?= $m['jenis_kendaraan'] ?></td>
                      <td><?= $m['status_kendaraan'] ?></td>
                      <td><?= $m['tahun_pembuatan'] ?></td>
                      <td><?= $m['no_hp'] ?></td>
                      <td>
                        <a href="mailto:<?= $m['email'] ?>">
                          <button class="btn btn-primary btn-sm">Replay Pengajuan</button>
                        </a>
                        <a href="<?= base_url('administrator/pengajuan-customers/hapus/'.$m['id_pengajuan']) ?>">
                          <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin Menghapus') ">Hapus</button>
                        </a>
                      </td>
                    </tr>
                  <?php $no++; ?>
                  <?php endforeach; ?>

                </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper