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
<div id="flash" data-flash="<?= session()->getFlashdata('mesages')?>">
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
              <div class="card-header">
                <a href="/Person/Create" class="btn btn-outline-info btn-sm"> <i class="fa fa-plus-square"> ADD</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="myTables" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th scope="col" style="width:5%">No</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Addres</th>
                      <th scope="col" style="width:8%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no=1; foreach ($datapers as $key => $val) { ?>
                      <tr>
                        <td><?= $no++;?></td>
                        <td><?= $val['FirstName'] ?></td>
                        <td><?= $val['LastName'] ?></td>
                        <td><?= $val['address'] ?></td>
                        <td>
                        <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <?php } ?>
                  </tbody>
                </table>
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