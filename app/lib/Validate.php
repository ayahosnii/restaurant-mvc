<?php

namespace app\lib;

trait Validate
{

  private $_regexPatterns = [
    'num'           => '/^[0-9]+(?:\.[0-9]+)?$/',
    'int'           => '/^[0-9]+$/',
    'float'         => '/^[0-9]+\.[0-9]+$/',
    'alpha'         => '/^[a-zA-Z\p{Arabic} ]+$/u',
    'alphanum'      => '/^[a-zA-Z\p{Arabic}0-9 ]+$/u',
    'vdate'         => '/^[1-2][0-9][0-9][0-9]-(?:(?:0[1-9])|(?:1[0-2]))-(?:(?:0[1-9])|(?:(?:1|2)[0-9])|(?:3[0-1]))$/',
    'email'         => '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
    'url'           => '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'
  ];

  public function req ($value)
  {
    return '' != $value || !empty($value);
  }

  public function num($value)
  {
    return (bool) preg_match($this->_regexPatterns['num'], $value);
  }

  public function int($value)
  {
    return (bool) preg_match($this->_regexPatterns['int'], $value);
  }

  public function float($value)
  {
    return (bool) preg_match($this->_regexPatterns['float'], $value);
  }

  public function alpha($value)
  {
    return (bool) preg_match($this->_regexPatterns['alpha'], $value);
  }

  public function alphanum($value)
  {
    return (bool) preg_match($this->_regexPatterns['alphanum'], $value);
  }

  public function eq($value, $matchAgainst)
  {
    return $value == $matchAgainst;
  }

  public function eq_field($value, $otherFieldValue)
  {
    return $value == $otherFieldValue;
  }

  public function lt($value, $matchAgainst)
  {
    if(is_string($value)) {
      return mb_strlen($value) < $matchAgainst;
    } elseif (is_numeric($value)) {
      return $value < $matchAgainst;
    }
  }

  public function gt($value, $matchAgainst)
  {
    if(is_string($value)) {
      return mb_strlen($value) > $matchAgainst;
    } elseif (is_numeric($value)) {
      return $value > $matchAgainst;
    }
  }

  public function min($value, $min)
  {
    if(is_string($value)) {
      return mb_strlen($value) >= $min;
    } elseif (is_numeric($value)) {
      return $value >= $min;
    }
  }

  public function max($value, $max)
  {
    if(is_string($value)) {
      return mb_strlen($value) <= $max;
    } elseif (is_numeric($value)) {
      return $value <= $max;
    }
  }

  public function between($value, $min, $max)
  {
    if(is_string($value)) {
      return mb_strlen($value) >= $min && mb_strlen($value) <= $max;
    } elseif (is_numeric($value)) {
      return $value >= $min && $value <= $max;
    }
  }

  public function floatlike($value, $beforeDP, $afterDP)
  {
    if(!$this->float($value))
    {
      return false;
    }
    $pattern = '/^[0-9]{' . $beforeDP . '}\.[0-9]{' . $afterDP . '}$/';
    return (bool) preg_match($pattern, $value);
  }

  public function vdate($value)
  {
    return (bool) preg_match($this->_regexPatterns['vdate'], $value);
  }

  public function email($value)
  {
    return (bool) preg_match($this->_regexPatterns['email'], $value);
  }

  public function url($value)
  {
    return (bool) preg_match($this->_regexPatterns['url'], $value);
  }

  function isValid($roles, $inputType) {
    // Initialize the errors array.
    $errors = [];

    // If the roles array is not empty, then...
    if (!empty($roles)) {
      // Iterate over the roles array.
      foreach ($roles as $fieldName => $validationRoles) {
        // Get the value of the input data.
        $value = $inputType[$fieldName];

        // Split the validation roles into an array.
        $validationRoles = explode('|', $validationRoles);

        // Iterate over the validation roles array.
        foreach ($validationRoles as $validationRole) {
          // If the field name already exists in the errors array, then skip this validation.
          if (array_key_exists($fieldName, $errors)) {
            continue;
          }

          // Check if the validation role is a regular expression.
          if (preg_match('/^(min|max|lt|gt|between|floatlike|eq|eq_field)$/', $validationRole)) {
            /**
             * If the validation role is a regular expression, then...
             * Match the regular expression against the value of the input data.
             */
            if (!preg_match($validationRole, $value)) {
              /**
               * If the regular expression does not match, then...
               * Add an error message to the errors array.
               */
              $this->messenger->add(
              // Get the error message for the validation role.
                $this->language->feedKey('text_error_'.$validationRole, [$this->language->get('text_label_'.$fieldName)]),
                // The message type is APP_MESSAGE_ERROR.
                Messenger::APP_MESSAGE_ERROR
              );
              // Set the error flag for the field name.
              $errors[$fieldName] = true;
            }
          } else {
            /**
             * If the validation role is not a regular expression, then...
             * Call the corresponding function to validate the value of the input data.
             */
            if ($this->$validationRole($value) === false) {
              /**
               * If the function returns false, then...
               * Add an error message to the errors array.
               */
              $this->messenger->add(
              // Get the error message for the validation role.
                $this->language->feedKey('text_error_'.$validationRole, [$this->language->get('text_label_'.$fieldName)]),
                // The message type is APP_MESSAGE_ERROR.
                Messenger::APP_MESSAGE_ERROR
              );
              // Set the error flag for the field name.
              $errors[$fieldName] = true;
            }
          }
        }
      }
    }

    // Return true if there are no errors, false otherwise.
    return empty($errors) ? true : false;
  }
}
