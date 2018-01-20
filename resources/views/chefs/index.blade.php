@extends('layouts.app')

@section('title', '在職廚師')

@section('contents')
    <table border="0" class="table table-hover">
        <thead>
            <tr>
                <th style="text-align: center;">姓名</th>
                <th style="text-align: center;">電子信箱</th>
                <th style="text-align: center;">專長</th>
                <th style="text-align: center;">到職日</th>
                <th style="text-align: center;">檢視</th>
                <th style="text-align: center;">編輯</th>
                <th style="text-align: center;">狀態</th>
            </tr>
        </thead>
        @forelse($chefs as $chef)
            <tr>
                <td>{{ $chef->name }}</td>
                <td><a href="mailto:{{ $chef->email }}">{{ $chef->email }}</a></td>
                <td>{{ $chef->professional }}</td>
                <td>{{ Carbon\Carbon::parse($chef->employed_at)->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('chefs.show', ['id' => $chef->id]) }}">檢視</a>
                </td>
                <td>
                    <a href="{{ route('chefs.edit', ['id' => $chef->id]) }}">編輯</a>
                </td>
                <td>
                    <a href="{{ route('chefs.destroy', ['id' => $chef->id]) }}">離職</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">目前沒有廚師</td>
            </tr>
        @endforelse
    </table>
@stop