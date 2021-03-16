<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>/administrator">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
            <div class="card-header">
              <a href="<?= base_url() ?>/administrator/profile/create">
                <button class="btn btn-success">Create</button>
              </a>
            </div>
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
                  <th>Nama Customers</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Pesan</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 1;  ?>
                  <?php foreach($pesan as $m) : ?>
                    <tr>
                      <td><?= $no?></td>
                      <td><?= $m['name'] ?></td>
                      <td><?= $m['email'] ?></td>
                      <td><?= $m['subject'] ?></td>
                      <td><?= $m['message'] ?></td>
                      <td>
                        <a href="mailto:<?= $m['email'] ?>">
                          <button class="btn btn-primary btn-sm">Replay Pesan</button>
                        </a>
                        <a href="<?= base_url('administrator/message/hapus/'.$m['id_message']) ?>">
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
  <!-- /.content-wrapper -->