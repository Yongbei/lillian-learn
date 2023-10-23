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
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>