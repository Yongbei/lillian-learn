@extends('layouts.app')

@section('content')
    <a href="{{ route('products.index') }}">回主畫面</a>
    <a href="{{ route('companies.index') }}">回公司清單</a>
    <h1>{{ $company->name }} 明細</h1>
    <p>姓名: {{ $company->name }}</p>
@endsection