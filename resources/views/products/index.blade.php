<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <p>Index</p>
    <a href="{{route('products.create')}}">afasdfadfadsf</a>
    <div>
        {{auth()->user()}}
    </div>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <a href="{{route('logout')}}">adfadsf</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>

        </thead>
        <tbody>
            @foreach($products as $product)
                @if ($product->user_id  == auth()->id())
                    <tr>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td><a href="{{route('products.edit', ['product' => $product])}}">Edit</a></td>
                        <td>
                            <form action="{{route('products.delete', ['product' => $product])}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</body>
</html>