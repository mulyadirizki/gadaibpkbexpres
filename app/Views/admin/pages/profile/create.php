<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile GABE</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>/administrator">Home</a></li>
              <li class="breadcrumb-item active">profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Profile</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <?php if(!empty(session()->getFlashdata('success'))){ ?>

              <div class="alert alert-success">
                  <?php echo session()->getFlashdata('success');?>
              </div>     
                 
            <?php } ?>

            <?= form_open_multipart(base_url('administrator/profile/store')); ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="">No HP</label>
                      <input type="text" name="no_hp" placeholder="Nomor HP" class="form-control">
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" placeholder="Email" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Alamat </label>
                      <textarea style="height: 100px" name="alamat" placeholder="Alamat" class="form-control"></textarea> 
                  </div>
                </div>
              </div>
              <!-- /.row -->
              <div class="form-group">
                <?= form_submit('Save', 'Save', ['class' => 'btn btn-primary']) ?>
              </div>
 
            <?= form_close() ?>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->