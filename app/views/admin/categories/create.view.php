<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
        <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1"> <?= $category_name?> </label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category name">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <input class="no_float" type="submit" name="submit">
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
