<?php

namespace App\Repositories;

interface PanierInterfaceRepository
{
    public function all();

    public function add($product, $quantity);

    public function update($product, $quantity);

    public function remove($product);

    public function empty();

    public function countItems();

    public function getTotal();

    public function getSubTotal();
}
