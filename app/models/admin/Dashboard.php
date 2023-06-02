<?php
namespace app\models\admin;


use app\interfaces\Subject;

class Dashboard implements Subject {
  private $observers = [];
  private $data;

  public function attach(Observer $observer) {
    $this->observers[] = $observer;
  }

  public function detach(Observer $observer) {
    $index = array_search($observer, $this->observers);
    if ($index !== false) {
      unset($this->observers[$index]);
    }
  }

  public function notify() {
    foreach ($this->observers as $observer) {
      $observer->update($this->data);
    }
  }

  public function updateData($data) {
    $this->data = $data;
    $this->notify();
  }
}
