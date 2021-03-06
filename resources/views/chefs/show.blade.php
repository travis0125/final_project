@extends('layouts.app')

@section('title', '個人的食譜')

@section('contents')
    <table border="0" class="table table-hover">
        <thead>
            <tr>
                <th style="width: 105px;text-align: center;">名稱</th>
                <th style="width: 50px;text-align: center;">種類</th>
                <th style="width: 120px;text-align: center;">食材</th>
                <th style="width: 110px;text-align: center;">調味料</th>
                <th style="width: 120px;text-align: center;">步驟</th>
                <th style="width: 50px;text-align: center;">編輯</th>
                <th style="width: 50px;text-align: center;">狀態</th>
            </tr>
        </thead>
        @forelse($cookbooks as $cookbook)
            <tr>
                <td>{{ $cookbook->title }}</td>
                <td>{{ $cookbook->type }}</td>
                <td>{{ $cookbook->ingredient }}</td>
                <td>{{ $cookbook->flavor }}</td>
                <td>{{ $cookbook->step }}</td>
                <td>
                    <a href="{{ route('cookbooks.edit', ['id' => $cookbook->id]) }}">編輯</a>
                </td>
                <td >
                    <a href="{{ route('cookbooks.destroy', ['id' => $cookbook->id]) }}">刪除</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">該位廚師沒有食譜</td>
            </tr>
        @endforelse
    </table>
@stop