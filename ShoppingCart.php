<?php
/**
 * Classe per la gestione di un carrello elettronico
 *
 * @author Enrico Zimuel (enrico.zimuel@its-ictpiemonte.it)
 */
declare(strict_types=1);

class ShoppingCart
{
    public function addProduct(string $product, int $quantity): bool
    {
    }

	public function removeProduct(string $product): bool
    {
    }

    public function changeQuantity(string $product, int $quantity): bool
    {
    }

	public function removeAllProducts(): bool
    {
    }
}
