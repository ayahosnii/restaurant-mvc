<?php

namespace app\lib;

class Messenger
{
  // Message types constants
  const APP_MESSAGE_SUCCESS = 1;
  const APP_MESSAGE_ERROR = 2;
  const APP_MESSAGE_WARNING = 3;
  const APP_MESSAGE_INFO = 4;

  // Singleton instance
  /*
   * The private static $_instance property will hold the singleton instance of the Messenger class.
   * */
  private static $_instance;

  // Session manager object
  private $_session;

  // Array to store messages
  private $_messages = [];

  // Private constructor
  private function __construct($session)
  {
    $this->_session = $session;
  }

  /**
   * Singletons should not be cloneable.
   */
  private function __clone()
  {
    // TODO: Implement __clone() method.
  }

  // Static method to get the singleton instance
  public static function getInstance(SessionManager $session)
  {
    if (self::$_instance === null) {
      self::$_instance = new self($session);
    }
    return self::$_instance;
  }

  // Add a message to the session
  public function add($message, $type = self::APP_MESSAGE_SUCCESS)
  {
    if (!$this->messagesExists()) {
      $this->_session->messages = [];
    }
    $msgs = $this->_session->messages;
    $msgs[] = [$message, $type];
    $this->_session->messages = $msgs;
  }

  // Check if messages exist in the session
  private function messagesExists()
  {
    return isset($this->_session->messages);
  }

  // Get messages from the session and clear them
  public function getMessages()
  {
    if ($this->messagesExists()) {
      $this->_messages = $this->_session->messages;
      unset($this->_session->messages);
      return $this->_messages;
    }
    return [' '];
  }
}
