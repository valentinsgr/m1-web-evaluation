<?php

namespace App\API\Migrations;

use App\API\Migrations\AbstractMigrations;

require_once "vendor/autoload.php";

class Migrations20191017 extends AbstractMigrations
{
    protected $sql = "
 		CREATE TABLE destination.country(
			id TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(100),
			city_id TINYINT UNSIGNED,
			CONSTRAINT city_country FOREIGN KEY (city_id) REFERENCES city(id)
		);
        
  INSERT INTO destination.country VALUES
                        (NULL, 'France', 1),
                         (NULL, 'Japon', 2),
                          (NULL, 'Angleterre', 3);
    \";    
    ";

    public function getSQL(): string
    {
        return $this->sql;
    }
}