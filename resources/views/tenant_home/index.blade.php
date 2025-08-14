<!DOCTYPE html>
<html>
<head>
    <title>{{ tenant('name') }} Store</title>
    <style>
        body {
            background-color: lightblue;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            color: navy;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid navy;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        .add-btn {
            display: inline-block;
            padding: 8px 12px;
            background-color: navy;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .add-btn:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <h1>Welcome to {{ tenant('name') }} Store</h1>
    <a href="{{ route('product.create') }}" class="add-btn">+ Add Product</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>
                    @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" width="50">
                    @else
                        <img src="https://via.placeholder.com/50" alt="No image">
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No Product Here</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</body>
</html>
