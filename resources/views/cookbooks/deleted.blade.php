@extends('layouts.app')

@section('title', '已刪除食譜')

@section('contents')
    <table border="0" class="table table-hover">
        <thead>
            <tr>
                <th style="width: 105px;text-align: center;">名稱</th>
                <th style="width: 50px;text-align: center;">種類</th>
                <th style="width: 120px;text-align: center;">食材</th>
                <th style="width: 110px;text-align: center;">調味料</th>
                <th style="width: 120px;text-align: center;">步驟</th>
                <th style="width: 60px;text-align: center;">廚師</th>
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
                    @if (isset($cookbook->chef))
                        {{ $cookbook->chef->name }}
                    @else
                        廚師離職
                    @endif
                </td>
                <td>
                    <a href="{{ route('cookbooks.restore', ['id' => $cookbook->id]) }}">還原</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">目前沒有食譜被刪除</td>
            </tr>
        @endforelse
    </table>
@stop