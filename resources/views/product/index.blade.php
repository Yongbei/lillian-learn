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
                <a href="/products/{{ $product->id }}/edit">修改</a>
                <form action="/products/{{ $product->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="刪除">
                </form>
            </li>
        @endforeach
    </ul>

    <table style="border: 1px solid black;">
        <tr>
            <th style="border: 1px solid black;">玩偶名稱</th>
            <th style="border: 1px solid black;">修改</th>
            <th style="border: 1px solid black;">刪除</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td style="border: 1px solid black;">
                    <a href="/products/{{ $product->id }}">{{ $product->name }}</a>
                </td>
                <td style="border: 1px solid black;">
                    <a href="/products/{{ $product->id }}/edit">修改</a>
                </td>
                <td style="border: 1px solid black;">
                    <form action="/products/{{ $product->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="刪除">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</body>
</html>