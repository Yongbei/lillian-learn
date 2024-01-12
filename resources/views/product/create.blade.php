@extends('layouts.app')

@section('title', '建立黃郁詠玩偶頁面')

@section('content')
    <a href="{{ route('products.index') }}">回主畫面</a>
    <h1>黃郁詠想購買的玩偶清單 建立</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="product_name" placeholder="請輸入產品名稱">
        <br>
        <br>
        真公司
        <select name="company_id">
            @foreach ($companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
        </select>
        <br>
        <br>
        假公司(測試用)
        <select name="company_fake_id">
            <option value="1">公司-1</option>
            <option value="2">公司-2</option>
            <option value="3">公司-3</option>
            <option value="4">公司-4</option>
        </select>
        <br>
        <br>
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