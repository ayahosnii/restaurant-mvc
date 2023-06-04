<?php

namespace app\controllers\admin;

use app\controllers\AdAbstractController;
use app\controllers\admin\AdminController;
use app\lib\FileUpload;
use app\lib\Helper;
use app\lib\InputFilter;
use app\lib\Messenger;
use app\lib\Validate;
use app\models\admin\Category;
use app\models\admin\Menu;
use app\models\admin\Privilege;

class MenusController extends AdAbstractController
{
  use InputFilter;
  use Helper;
  use Validate;

  private $_createActionRoles =
    [
      'item_name'       => 'req|alphanum',
      'description'     => 'req|alphanum',
      'price'           => 'req|num',
      'category_id'     => 'req|num',
    ];

  public function defaultAction()
  {
    $this->language->load('admin.template.common');
    $this->language->load('admin.menus.default');

    $this->_data['menus'] = Menu::getAll();

    $this->_view();
  }
  public function createAction()
  {
    $this->language->load('admin.template.common');
    $this->language->load('admin.menus.create');
    $this->language->load('admin.menus.labels');


    $this->_data['categories'] = Category::getAll();

    if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {
      $menu = new Menu();
      $menu->item_name = $this->filterString($_POST['item_name']);
      $menu->description = $this->filterString($_POST['description']);
      $menu->price = $this->filterFloat($_POST['price']);
      $menu->category_id = $this->filterInt($_POST['category_id']);

      $uploadError = false;

      if(!empty($_FILES['image']['name'])) {
        $uploader = new FileUpload($_FILES['image']);
        try {
          $uploader->upload();
          $menu->image = $uploader->getFileName();
          var_dump($menu->image);
        } catch (\Exception $e) {
          $this->messenger->add($e->getMessage(), Messenger::APP_MESSAGE_ERROR);
          $uploadError = true;
        }
      }

      if($uploadError === false && $menu->save())
      {
        $this->messenger->add($this->language->get('message_create_success'));
        $this->redirect('/admin/menus/create');
        var_dump($menu->image);
      } else {
        $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
      }

    }

    $this->_view();
  }

  public function deleteAction()
  {

    $id = $this->filterInt($this->_params);
    $menu = Menu::getByPK($id);

    if($menu === false) {
      var_dump($this->image);
    }

    $this->language->load('admin.menus.messages');

    if($menu->delete())
    {

      // Remove the old image
      if($menu->image !== '' && file_exists(IMAGES_UPLOAD_STORAGE.DS.$menu->image) && is_writable(IMAGES_UPLOAD_STORAGE)) {
        unlink(IMAGES_UPLOAD_STORAGE.DS.$menu->image);
      }
      $this->messenger->add($this->language->get('message_delete_success'));
    } else {
      $this->messenger->add($this->language->get('message_delete_failed'));
    }
    $this->redirect('/admin/menus');
  }

}
