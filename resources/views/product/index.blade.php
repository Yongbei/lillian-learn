<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>清單</title>
</head>
<body>
    <h1>黃郁詠想購買的玩偶清單</h1>
    <a href="/products/create">建立頁面</a>
    <a href="https://bitcoin.org/zh_TW/" target="_blank">bitcoin</a>
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="/products/{{ $product->id }}">{{ $product->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>