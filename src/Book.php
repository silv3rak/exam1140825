<?php
declare(strict_types=1);

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Sellable.php';

/**
 * Represents a book product.
 */
class Book extends Product implements Sellable
{
    public function __construct(int $id, string $title, int $price)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
    }

    public function getTypeLabel(): string
{
    return 'کتاب';
}

public function getFinalPrice(): int
{
    $price = $this->getPrice();
    $discount = intdiv($price, 10);  
    return $price - $discount;
}


}
