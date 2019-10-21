<?php

namespace App\API\Entity;

use App\API\Repository\CountryRepository;

class Country implements \JsonSerializable
{
    private $id;
    private $name;
    private $city_id;
    private $cityName;
    private $cityImage;


    public function jsonSerialize():array
    {
        return  [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'city' => (new City($this->city_id, $this->cityName, $this->cityImage))
        ];
    }

    public function getId():int { return $this->id;}
    public function setId(int $id):void {
        $this->id = $id;
    }
    public function getName():?string { return $this->name;}
    public function setName(?string $name):void {
        $this->name = $name;
    }
    public function getCityId():?int { return $this->city_id;}
    public function setCityId(?int $cityId):void {
        $this->city_id = $cityId;
    }
}