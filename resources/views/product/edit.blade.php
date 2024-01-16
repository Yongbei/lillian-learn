@extends('layouts.app')

@section('content')
    <a href="{{ route('products.index') }}">回主畫面</a>
    <h1>{{ $product->name }} 修改畫面</h1>
    <form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <input type="text" name="product_name" value="{{ $product->name }}" placeholder="請輸入產品名稱">
        <br><br>
        公司:
        <select name="company_id">
            @foreach ($companies as $company)
                @php
                    $selected = '';
                    if ($company->id == $product->company_id) {
                        $selected = 'selected';
                    }
                @endphp
                <option value="{{ $company->id }}" {{ $selected }}>{{ $company->name }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="修改">
    </form>
@endsection