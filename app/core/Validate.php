<?php

namespace App\Core;

use Exception;

class Validate
{
    /**
     * @param $data
     * @param $type
     * @throws Exception
     */
    public static function validate($data, $type)
    {
        if (empty($data)) {
            throw new Exception("поле не введено");
        }

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        if ($type == "text") {
            if (!preg_match("/^[a-zA-Z0-9.-_ ]*$/",$data)) {
                throw new Exception("допустимы только латинские буквы");
            }

        } else if ($type == "email") {
            if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("некорректный формат email");
            }

        } else if ($type == "phone") {
            if (!preg_match("/^\(?\+?([0-9]{1,4})\)?[-\. ]?(\d{10})$/",$data)) {
                throw new Exception("некорректный формат phone");
            }
        }
    }
}