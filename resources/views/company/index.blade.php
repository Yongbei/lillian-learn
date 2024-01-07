@extends('layouts.app')

@section('content')
    <h1>公司管理</h1>
    <a href="{{ route('companies.create') }}">建立公司</a>

    <form action="{{ route('companies.index') }}">
        <input type="text" name='search' placeholder="搜尋公司名稱">
        <input type="submit" value="搜尋">
    </form>


    <table style="border: 1px solid black;">
        <tr>
            <th style="border: 1px solid black;">玩偶名稱</th>
            <th style="border: 1px solid black;">修改</th>
            <th style="border: 1px solid black;">刪除</th>
        </tr>
        @foreach ($companies as $company)
            <tr>
                <td style="border: 1px solid black;">
                    <a href="{{ route('companies.show', ['id' => $company->id]) }}">{{ $company->name }}</a>
                </td>
                <td style="border: 1px solid black;">
                    <a href="{{ route('companies.edit', ['id' => $company->id]) }}">修改</a>
                </td>
                <td style="border: 1px solid black;">
                    <form action="{{ route('companies.destroy', ['id' => $company->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="刪除">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection