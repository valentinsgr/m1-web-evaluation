<?php

namespace App\API\Controller;

use App\API\Repository\CountryRepository;

class CountryController extends AbstractController
{
    private $countryRepository;

    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    public function index(array $uriVars = [])
    {
        $this->render([
            'cities' => $this->countryRepository->findAll()
        ]);
    }

}