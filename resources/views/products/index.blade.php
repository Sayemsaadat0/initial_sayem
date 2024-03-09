<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prodcts</title>
</head>

<body>
    <h2>Products</h2>

    @if (session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
    @else
    @endif


    <div>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>qty</th>
                <th>price</th>
                <th>image</th>
                <th>descc</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <img src="{{ asset($product->image) }}" alt="Product Image">
                    </td>
                    <td>{{ $product->desc }}</td>
                    <td>
                        <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                    </td>

                    <td>
                        {{-- action={{route('product.destroy', ['product'->$product])}} --}}
                        <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
