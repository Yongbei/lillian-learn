@extends('layouts.app')

@section('content')
    <h1>[主畫面]黃郁詠想購買的玩偶清單</h1>
    <a href="{{ route('companies.index') }}">管理公司</a>
    <br>
    <a href="{{ route('products.create') }}">建立玩偶</a>
    <a href="https://laravel.com/" target="_blank">Laravel 外部連結</a>

    <form action="/products">
        <input type="text" name='search' placeholder="搜尋名稱">
        <input type="submit" value="搜尋">
    </form>


    <table style="border: 1px solid black;">
        <tr>
            <th style="border: 1px solid black;">玩偶名稱</th>
            <th style="border: 1px solid black;">修改</th>
            <th style="border: 1px solid black;">刪除</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td style="border: 1px solid black;">
                    <a href="{{ route('products.show', ['id' => $product->id]) }}">{{ $product->name }}</a>
                </td>
                <td style="border: 1px solid black;">
                    <a href="{{ route('products.edit', ['id' => $product->id]) }}">修改</a>
                </td>
                <td style="border: 1px solid black;">
                    <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="刪除">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
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
@endsection