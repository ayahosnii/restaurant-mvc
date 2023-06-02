<?php

namespace app\controllers\admin;

use app\controllers\AdAbstractController;
use app\controllers\admin\AdminController;
use app\lib\Helper;
use app\lib\InputFilter;
use app\models\admin\Category;
use app\models\admin\Privilege;

class CategoriesController extends AdAbstractController
{
  use InputFilter;
  use Helper;
  public function defaultAction()
  {
    $this->language->load('admin.template.common');
    $this->language->load('admin.categories.default');

    $this->_data['categories'] = Category::getAll();

    $this->_view();
  }
    public function createAction()
    {
      $this->language->load('admin.template.common');
      $this->language->load('admin.categories.create');

      if(isset($_POST['submit'])) {
        $category = new Category();
        $category->name = $this->filterString($_POST['name']);
        if($category->save())
        {
          $this->messenger->add('تم حفظ الصلاحية بنجاح');
          $this->redirect('/admin/categories');
        }
      }

      $this->_view();
    }

}
