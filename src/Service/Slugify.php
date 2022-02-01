<?php

namespace App\Service;

class Slugify {

    private const CARACTERESTOREPLACE = [" ", "@", "#", "&", '"', "'", "(", "§", "!", ")", "°", "^", "¨", "$", "*", "€", "%", "`", "£", "=", "+", ":", "/", ".", ",", ";", "?", "<", ">", "|", "\""];
    private const LETTERTOREPLACE = ["á" => "a", "à" => "a", "â" => "a", "ä" => "a", "ã" => "a", "å" => "a", "ç" => "c", "é" => "e", "è" => "e", "ê" => "e", "ë" => "e", "í" => "i", "ì" => "i", "î" => "i", "ï" => "i", "ñ" => "n", "ó" => "o", "ò" => "o", "ô" => "o", "ö" => "o", "õ" => "o", "ú" => "u", "ù" => "u", "û" => "u", "ü" => "u", "ý" => "y", "ÿ" => "y"];

    public function generate(string $input): string
    {
        $input = strtolower($input);
        $input = strtr($input, self::LETTERTOREPLACE);
        $input = str_replace(self::CARACTERESTOREPLACE, "", $input);
        $input = str_replace("--", "-", $input);

        return $input;
    }

} 