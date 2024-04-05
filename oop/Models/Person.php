<?php
class Person
{
    public string $name;
    public string $lastName;
    public int $birthYear;
    public int $height;
    public int $weight;

    public function currentPersonYear()
    {
        $currYears = date("Y") - $this->birthYear;
        echo $this->name . "ima " . $currYears . " godina";

    }


}