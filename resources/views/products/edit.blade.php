<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EditProducts</h1>
    <form action="{{route('products.update', ['product' => $product])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Product Name</label>
        <input type="text" name="product_name" value="{{$product->product_name}}"><br>
        <label for="">Price</label>
        <input type="number" name="price" value="{{$product->price}}"><br>
        <label for="">Quantity</label>
        <input type="number" name="qty" value="{{$product->qty}}"><br><br>
        <label for="">Description</label>
        <textarea name="description" id="" cols="30" rows="10">{{$product->description}}</textarea><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
