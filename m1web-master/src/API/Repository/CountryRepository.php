<?php


namespace App\API\Repository;


use App\API\Core\Database;

class CountryRepository
{

    private $database;
    private $connection;

    public function  __construct(Database $database)
    {
        $this->database = $database;
        $this->connection = $this->database->connect();
    }

    public function findAll():array
    {
        $sql = "
        select country.*, city.name as cityName, city.id as cityId, city.image as cityImage from destination.country inner join destination.city on destination.city.id = destination.country.id";
        $query = $this->connection->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(\PDO::FETCH_CLASS, 'App\API\Entity\Country');
        return $results;
    }
}