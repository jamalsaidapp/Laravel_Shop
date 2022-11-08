<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Theme\Client;
use App\Repositories\CartRepository;
use Illuminate\Http\Request;

class OrderConroller extends Controller
{

    public function index()
    {
        //
    }

    public function store(StoreOrderRequest $request)
    {

        $client = Client::create($request->validated());
        $order = $client->orders()->create([
            'order_number' => uniqid()
        ]);

        (new CartRepository())
            ->content()
            ->each(function ($product) use ($order) {
                $order->products()->attach($product->id, [
                    'price' => $product->price * $product->quantity,
                    'quantity' => $product->quantity,
                ]);
            });

        (new CartRepository())->clear();

        
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
