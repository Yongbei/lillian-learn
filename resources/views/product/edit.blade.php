<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $product->name }} 修改畫面</h1>
    <form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <input type="text" name="product_name" value="{{ $product->name }}" placeholder="請輸入產品名稱">
        <input type="submit" value="修改">
    </form>
</body>
</html>