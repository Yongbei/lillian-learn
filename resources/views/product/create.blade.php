@extends('layouts.app')

@section('content')
    <a href="{{ route('products.index') }}">回主畫面</a>
    <h1>黃郁詠想購買的玩偶清單 建立</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="product_name" placeholder="請輸入產品名稱">
        <input type="submit" value="建立">
    </form>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection