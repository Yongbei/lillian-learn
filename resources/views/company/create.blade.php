@extends('layouts.app')

@section('title', '建立公司頁面')

@section('content')
    <a href="{{ route('companies.index') }}">回主畫面</a>
    <h1>建立公司</h1>
    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="請輸入產品名稱">
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