<?php

namespace App\Core;

class Validate
{
    /**
     * @param $data
     * @param $type
     * @return string
     */
    public static function validate($data, $type)
    {
        $error = "";
        if (empty($data)) {
            $error = "Field is required";
        }

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        if ($type == "text") {
            if (!preg_match("/^[a-zA-Z0-9.-_ ]*$/",$data)) {
                $error = "Only latin letters and white space allowed";
            }

        } else if ($type == "email") {
            if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
                $error = "Invalid email format";
            }

        } else if ($type == "phone") {
            if (!preg_match("/^\(?\+?([0-9]{1,4})\)?[-\. ]?(\d{10})$/",$data)) {
                $error = "Please enter a valid phone number";
            }
        }
        return $error;
    }
}