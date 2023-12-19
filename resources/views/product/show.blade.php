<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('products.index') }}">回主畫面</a>
    <h1>{{ $product->name }} 明細</h1>
    {{-- paragraph 段落 --}}
    <p>姓名: {{ $product->name }}</p>
</body>
</html>