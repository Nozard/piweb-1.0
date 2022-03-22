<?php

namespace Joker\Piweb;


class Employee
{
    private $name;
    private $cnh;
    private $enrollment;

    public function __construct($name, $cnh, $enrollment)
    {
        $this->name = $name;
        $this->cnh = $cnh;
        $this->enrollment = $enrollment;
    }

    // public function getEmployee()
    // {

    // }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCnh(): string
    {
        return $this->cnh;
    }

    public function getEnrollment(): string
    {
        return $this->enrollment;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setEmployee($employee): void
    {
        $this->employee = $employee;
    }

    public function setEnrollment($enrollment): void
    {
        $this->enrollment = $enrollment;
    }
}