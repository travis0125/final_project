@extends('layouts.app')

@section('title', '離職廚師')

@section('contents')
    <table border="0" class="table table-hover">
        <thead>
            <tr>
                <th style="text-align: center;">姓名</th>
                <th style="text-align: center;">電子信箱</th>
                <th style="text-align: center;">專長</th>
                <th style="text-align: center;">離職日</th>
                <th style="text-align: center;">狀態</th>
            </tr>
        </thead>
        @forelse($chefs as $chef)
            <tr>
                <td>{{ $chef->name }}</td>
                <td><a href="mailto:{{ $chef->email }}">{{ $chef->email }}</a></td>
                <td>{{ $chef->professional }}</td>
                <td>{{ Carbon\Carbon::parse($chef->deleted_at)->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('chefs.restore', ['id' => $chef->id]) }}">復職</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">目前沒有廚師離職</td>
            </tr>
        @endforelse
    </table>
@stop