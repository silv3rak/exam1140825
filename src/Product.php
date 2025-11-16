<?php
declare(strict_types=1);

/**
 * Abstract base class for all products in this exam.
 *
 * NOTE TO STUDENTS:
 * - Do NOT rename this class or its methods.
 * - Complete all TODO sections as described in README.md.
 */
abstract class Product
{
protected int $id;
protected string $title;
protected int $price;

    abstract public function getTypeLabel(): string;
}
