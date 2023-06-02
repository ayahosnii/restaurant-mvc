<?php
namespace app\lib;

class Language {

    private $dictionary = [];

    public function load($path)
    {
        $defaultLanguage = APP_DEFAULT_LANGUAGE;
        if (isset($_SESSION['lang'])) {
            $defaultLanguage = $_SESSION['lang'];
        };
        $pathArray = explode('.', $path);
        if ($pathArray[0] === 'admin'){
          $languageFileToLoad = LANGUAGE_PATH . $defaultLanguage . DS . $pathArray[0] . DS . $pathArray[1] . DS . $pathArray[2] . '.lang.php';
        }else{
          $languageFileToLoad = LANGUAGE_PATH . $defaultLanguage . DS . $pathArray[0] . DS . $pathArray[1] . '.lang.php';
        }
        if (file_exists($languageFileToLoad)) {
            require $languageFileToLoad;
            if (is_array($_) && !empty($_)) {
                foreach ($_ as $key => $value) {
                    $this->dictionary[$key] = $value;
                }
                return $this->dictionary;
            }
        } else {
            trigger_error('Sorry the language file ' . $path . ' Doesn\'t Exist');
        }
        $languageFileContent = file_get_contents($languageFileToLoad);
    }

    public function get($key)
    {
        if (array_key_exists($key, $this->dictionary)) {
            return $this->dictionary[$key];
        }
    }

    public function feedKey($key,$data = [])
    {
        if (array_key_exists($key, $this->dictionary)) {

            array_unshift($this->dictionary[$key]);
            var_dump($data);
            //return call_user_func_array('sprinf', $data);
        }
    }

    public function getDictionary()
    {
        return $this->dictionary;
    }
}
