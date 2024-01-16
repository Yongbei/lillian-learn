@extends('layouts.app')

@section('content')
    <a href="{{ route('products.index') }}">回主畫面</a>
    <h1>{{ $product->name }} 明細</h1>
    <p>姓名: {{ $product->name }}</p>
    <p>公司: {{ $company->name }}</p>
@endsection