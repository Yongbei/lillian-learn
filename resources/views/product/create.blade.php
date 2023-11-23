<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>建立畫面</title>
</head>
<body>
    <h1>黃郁詠想購買的玩偶清單 建立</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="product_name" placeholder="請輸入產品名稱">
        <input type="submit" value="建立">
    </form>
</body>
</html>