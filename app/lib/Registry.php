<?php

namespace app\lib;



/**
 * The Registry class represents a Singleton design pattern implementation.
 * It provides a centralized storage mechanism for objects that can be accessed globally throughout the application.
 */


class Registry
{
  private static $_instance;

  /**
   * The Singleton's constructor should always be private to prevent direct
   * construction calls with the `new` operator.
   */
  private function __construct() {}

  /**
   * Singletons should not be cloneable.
   */
  private function __clone()
  {
    // TODO: Implement __clone() method.
  }

  /**
   * This is the static method that controls the access to the singleton
   * instance. On the first run, it creates a singleton object and places it
   * into the static field. On subsequent runs, it returns the client existing
   * object stored in the static field.
   *
   * This implementation lets you subclass the Singleton class while keeping
   * just one instance of each subclass around.
   */
  public static function getInstance()
  {
    if (self::$_instance === null) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }

  /**
   * Set a value for the specified key in the Registry object.
   * @param string $key The key for the value.
   * @param mixed $object The value to be stored.
   */
  public function __set($key, $object)
  {
    $this->$key = $object;
  }

  /**
   * Get the value for the specified key from the Registry object.
   * @param string $key The key to retrieve the value.
   * @return mixed|null The value associated with the key, or null if not found.
   */
  public function __get($key)
  {
    return $this->$key;
  }
}
