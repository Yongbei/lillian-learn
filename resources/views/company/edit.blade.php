@extends('layouts.app')

@section('content')
    <a href="{{ route('companies.index') }}">回主畫面</a>
    <h1>{{ $company->name }} 修改畫面</h1>
    <form action="{{ route('companies.update', ['id' => $company->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <input type="text" name="name" value="{{ $company->name }}" placeholder="請輸入公司名稱">
        <input type="submit" value="修改">
    </form>
@endsection