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
          <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
          <div class="card-body">
            <div class="form-group">

              <label for="exampleInputEmail1"> <?= $category_name?> </label>

                <select name="category_id" class="form-control" id="exampleInputEmail1">
                  <?php if ($categories !== false): foreach ($categories as $category): ?>
                  <option value="<?= $category->id ?>"><?= $category->name ?></option>
                  <?php endforeach; endif; ?>
                </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1"><?= $meal_name?></label>
              <input type="text" name="item_name" class="form-control" id="exampleInputEmail1" placeholder="Enter meal name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1"><?= $meal_description?></label>
              <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter Category description">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1"><?= $meal_price ?></label>
              <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="The meal price">
            </div>
            <div class="form-group">
              <label for="exampleInputFile"><?= $meal_image?></label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <input class="no_float" type="submit" name="submit">
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
