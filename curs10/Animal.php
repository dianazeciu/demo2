<?php

// clasa parinte
require_once ('MoveInterface.php');

abstract class Animal implements MoveInterface// nu poate instantia dar poate fi mostenita - daca este abstract
    //in clasele abstracte, avem voie sa avem si metode abstracte
{
    public string $name;
    protected int $legs;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function setLegs($legs)
    {
    if (! $this->validateLegs($legs)) {
        exit ('Tooo much legs!');
    }
    $this->legs =$legs;
    }

    public function getLegs()
    {
        return 'Abstract animal has no legs';
    }

    public function validateLegs($legs)
    {
        if ($legs !==4) {
    return false;
        }
      return true;
    }

    private function walk()
    {
        return 'uof uof';
    }
}