<?php

namespace App\Repositories;

use App\Models\Theme\Product;
use Illuminate\Support\Collection;

class CartRepository
{

    public function add(Product $product): int
    {
        \Cart::session(request()->session()->getId())
            ->add([
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'attributes' => [],
                'associatedModel' => $product
            ]);

        return $this->content();
    }

    public function content(): array
    {
        $cartContent = \Cart::session(request()->session()->getId())->getContent();
        $count = $this->count();
        return compact('cartContent', 'count');
    }

    public function count(): int
    {
        return $this->content()->sum('quantity');
    }

    public function jsonOrderItems(): string
    {
        return $this
            ->content()
            ->map(function ($orderItem) {
                return [
                    'name' => $orderItem->name,
                    'quantity' => $orderItem->quantity,
                    'price' => $orderItem->price,
                ];
            })
            ->toJson();
    }

    public function total(): int
    {
        return \Cart::session(request()->session()->getId())
            ->getTotal();
    }

    public function decreaseQuantity(int $rowId): array
    {
        if ($this->getItem($rowId)->quantity === 1) {
            $this->delete($rowId);
            return $this->content();
        }

        \Cart::session(request()->session()->getId())
            ->update($rowId, array(
                'quantity' => -1
            ));
        return $this->content();
    }

    private function getItem(int $rowId)
    {
        return \Cart::session(request()->session()->getId())
            ->get($rowId);
    }

    public function delete(string $rowId): int
    {
        \Cart::session(request()->session()->getId())->remove($rowId);

        return $this->content();
    }

    public function increaseQuantity(int $rowId): array
    {
        \Cart::session(request()->session()->getId())
            ->update($rowId, array(
                'quantity' => +1
            ));
        return $this->content();
    }

    public function clear()
    {
        \Cart::session(request()->session()->getId())->clear();
    }

}
