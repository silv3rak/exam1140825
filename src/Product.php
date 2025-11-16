<?php
declare(strict_types=1);


abstract class Product
{
protected int $id;
protected string $title;
protected int $price;


public function __construct(int $id, string $title, int $price)
{
    $this->id = $id;
    $this->title = $title;
    $this->price = $price;
}


public function getTitle(): string
{
    return $this->title;
}

public function getPrice(): int
{
    return $this->price;
}


    abstract public function getTypeLabel(): string;
}
