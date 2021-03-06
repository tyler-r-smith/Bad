<?php
use Kepler12\Bad\Rule;

class RemoveFives extends Rule {

    public static $data_type = ['array'];

    public static function run ($data)
    {
        return array_diff($data, [5]);
    }
}

class AboveTen extends Rule {

    public static $data_type = ['array'];

    public static function run ($data)
    {
        $result = [];
        foreach($data as $number) {
            if ($number > 10) {
                array_push($result, $number);
            }
        }
        return $result;
    }
}
