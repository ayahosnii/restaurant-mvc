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
      <div class="col-md-2 my-2">
        <a href="/admin/menus/create" class="btn btn-block btn-success"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
            <tr>
              <th><?= $text_table_privilege ?></th>
              <th><?= $text_table_control ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($menus)): ?>
              <?php foreach ($menus as $menu): ?>
                <?php if (is_object($menu)): ?>
                  <tr>
                    <td><?= $menu->item_name ?></td>
                    <td><?= $menu->price ?> $</td>
                    <td>
                      <a href="/admin/menus/edit/<?= $menu->id ?>"><i class="fa fa-edit"></i></a>
                      <a href="/admin/menus/delete/<?= $menu->id ?>" onclick="if(!confirm('<?= $text_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="3">No privileges found.</td>
              </tr>
            <?php endif; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
