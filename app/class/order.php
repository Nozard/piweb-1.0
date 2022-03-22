<?php

namespace Joker\Piweb;


class Order
{
    private $km;
    private $address;
    private $status;

    public function __construct($km, $address, $status)
    {
        $this->km = $km;
        $this->address = $address;
        $this->status = $status;
    }

    public function getKm(): int
    {
        return $this->km;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function setKm($km): void
    {
        $this->km = $km;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }
}