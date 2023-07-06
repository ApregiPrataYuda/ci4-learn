<?php $validation = \Config\Services::validation(); ?>
<?= $this->extend('Templating/template') ?>

<?= $this->section('content') ?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><span class="badge badge-secondary"> <?= $title ?> </span></h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a class="text-info" href="#"><span class="badge badge-secondary"> Dashboard</span></a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<!--start view for user -->
<section class="content">
   
        <!-- Default box -->
        <div class="card">
          <div class="card-header" style="background-color:RGB(40, 178, 170);">
            <h3 class="card-title text-light">Data <?= $title ?></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="/Person/Save/" method="POST">
                <?= csrf_field() ?>
              <div class="row">
                <div class="form-group col-md-6">
                    <label for="FirstName">First Name</label>
                    <input type="text" class="form-control" name="FirstName" placeholder="FirstName">
                    <!-- Error -->
                  <?php if($validation->getError('FirstName')) {?>
                       <small class="badge badge-danger font-italic">
                         <?= $error = $validation->getError('FirstName'); ?>
                       </small>
                  <?php }?>
                </div>

                <div class="form-group col-md-6">
                    <label for="LastName">LastName</label>
                    <input type="text" class="form-control" name="LastName" placeholder="LastName">
                    <!-- Error -->
                  <?php if($validation->getError('LastName')) {?>
                       <small class="badge badge-danger font-italic">
                         <?= $error = $validation->getError('LastName'); ?>
                       </small>
                  <?php }?>
                </div>
              </div>

              <div class="row">
              <div class="form-group col-md-12">
                    <label for="address">Addr</label>
                    <textarea name="address" id="address" cols="30" rows="10" class="form-control"></textarea>
                    <?php if($validation->getError('address')) {?>
                       <small class="badge badge-danger font-italic">
                         <?= $error = $validation->getError('address'); ?>
                       </small>
                  <?php }?>
                </div>
              </div>
              <div class="row ml-2">
              <button type="submit" name="add" class="btn btn-sm btn-outline-primary">Add</button>
              </div>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
              </div>
            
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
  </section>
<!--start view for end -->


<?= $this->endSection() ?>