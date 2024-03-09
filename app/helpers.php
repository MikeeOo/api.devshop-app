<?php

use Illuminate\Support\Str;

// other method
//function snakeToCamel($string) {
//    return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $string))));
//}
function snakeToCamel($string): string
{
    return Str::of("$string")->camel()->toString();
}

function arrayKeysToCamelCase(array $data): array
{
    $result = [];

    foreach ($data as $key => $value) {
        $camel = snakeToCamel($key);
        if (is_array($value)) {
            $value = arrayKeysToCamelCase($value);
        }
        $result[$camel] = $value;
    }

    return $result;
}

// your old method
//foreach ($products as $product) {
//    $arr = [];
//    foreach ($product as $key => $value) {
//        $camel = Str::of("$key")->camel()->toString();
//        $arr[$camel] = $value;
//    }
//    return $arr;
//}
