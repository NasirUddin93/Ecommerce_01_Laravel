@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Create Order</h2>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        @foreach(range(1, 3) as $i)
            <div class="mb-4">
                <label for="products[{{ $i }}][product_id]" class="block font-medium">Product {{ $i }}</label>
                <select name="products[{{ $i }}][product_id]" class="border rounded p-2 w-full">
                    <option value="">-- Select Product --</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
                <input type="number" name="products[{{ $i }}][quantity]" class="border rounded p-2 w-full mt-2" placeholder="Quantity">
            </div>
        @endforeach


        {{-- Total Amount --}}
        <div class="mb-4">
            <label class="block text-sm font-medium">Total Amount</label>
            <input type="number" name="total_amount" step="0.01" class="border rounded w-full p-2" required>
        </div>

        {{-- Status --}}
        <div class="mb-4">
            <label class="block text-sm font-medium">Status</label>
            <select name="status" class="border rounded w-full p-2">
                <option value="pending">Pending</option>
                <option value="paid">Paid</option>
                <option value="shipped">Shipped</option>
            </select>
        </div>

        {{-- Order Items --}}
        <div class="mb-4">
            <label class="block text-sm font-medium">Products</label>
            <div id="order-items">
                <div class="flex gap-2 mb-2">
                    <input type="number" name="items[0][product_id]" placeholder="Product ID" class="border rounded p-2 w-1/3" required>
                    <input type="number" name="items[0][quantity]" placeholder="Qty" class="border rounded p-2 w-1/3" required>
                    <input type="number" name="items[0][price]" placeholder="Price" step="0.01" class="border rounded p-2 w-1/3" required>
                </div>
            </div>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save Order</button>
    </form>
</div>
@endsection
