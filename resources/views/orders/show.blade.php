@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Order #{{ $order->id }}</h2>

    <p><strong>User:</strong> {{ $order->user->name }}</p>
    <p><strong>Total Amount:</strong> {{ $order->total_amount }}</p>
    <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
    <p><strong>Created At:</strong> {{ $order->created_at->format('d M Y H:i') }}</p>

    <h3 class="text-xl font-semibold mt-6 mb-2">Order Items</h3>
    <table class="w-full border">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Product</th>
                <th class="border px-4 py-2">Quantity</th>
                <th class="border px-4 py-2">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
            <tr>
                <td class="border px-4 py-2">{{ $item->product->name ?? 'Product #'.$item->product_id }}</td>
                <td class="border px-4 py-2">{{ $item->quantity }}</td>
                <td class="border px-4 py-2">{{ $item->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
