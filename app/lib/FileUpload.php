<?php

namespace app\lib;

class FileUpload
{
  private $name;
  private $type;
  private $size;
  private $error;
  private $tmpPath;

  private $fileExtension;
  private static $salt = '$2a$07$yeNCSNwRpYopOhv0TrrReP$';


  private $allowedExtensions = [
    'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'xls'
  ];

  public function __construct(array $file)
  {
    $this->name = $file['name'];
    $this->type = $file['type'];
    $this->size = $file['size'];
    $this->error = $file['error'];
    $this->tmpPath = $file['tmp_name'];
    $this->name();
  }

  private function name()
  {
    // Generate a base64-encoded string from the file name and salt.
    $base64String = base64_encode($this->name . self::$salt);

    // Truncate the string to 30 characters.
    $name = substr($base64String, 0, 30);

    // Replace every 6 characters with an underscore.
    $name = preg_replace('/(\w{6})/', '$1_', $name);

    // Remove any trailing underscores.
    $name = rtrim($name, '_');

    // Return the file name.
    return $name . $this->fileExtension;
  }

  private function isAllowedType()
  {
    return in_array($this->fileExtension, $this->allowedExtensions);
  }

  private function isSizeNotAcceptable()
  {
    preg_match_all('/(\d+)([MG])$/i', MAX_FILE_SIZE_ALLOWED, $matches);
    $maxFileSizeToUpload = $matches[1][0];
    $sizeUnit = $matches[2][0];
    $currentFileSize = ($sizeUnit == 'M') ? ($this->size / 1024 / 1024) : ($this->size / 1024 / 1024 / 1024);
    $currentFileSize = ceil($currentFileSize);
    return(int) $currentFileSize > (int) $maxFileSizeToUpload;
  }

  private function isImage()
  {
    return preg_match('/image/i', $this->type);
  }

  public function getFileName()
  {
    return $this->name . '.' . $this->fileExtension;
  }

  public function upload()
  {
    if($this->error != 0) {
      throw new \Exception('Sorry file didn\'t upload successfully');
    } elseif(!$this->isAllowedType()) {
      throw new \Exception('Sorry files of type ' . $this->fileExtension .  ' are not allowed');
    } elseif ($this->isSizeNotAcceptable()) {
      throw new \Exception('Sorry the file size exceeds the maximum allowed size');
    } else {
      $storageFolder = $this->isImage() ? IMAGES_UPLOAD_STORAGE : DOCUMENTS_UPLOAD_STORAGE;
      if(is_writable($storageFolder)) {
        move_uploaded_file($this->tmpPath, $storageFolder . DS . $this->getFileName());
      } else {
        throw new \Exception('Sorry the destination folder is not writable');
      }
    }
    return $this;
  }
}
