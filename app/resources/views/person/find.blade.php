@extends('layouts.helloapp')


@section('title', 'Index')

@section('menubar')
    @parent
    検索ページ
@endsection

@section('content')

    <form action="/person/find" method="post">
        @csrf
        <input type="text" name="input" value="{{$input}}">
        <input type="submit" value="find">

        @if (@isset($item))
            <table>
                <tr>
                    <th>Data</th>
                </tr>
                <td>
                    {{$item->getData()}}</td>
                </td>
            </table>

        @endif

    </form>
@endsection

@section('footer')
copyright 2021
@endsection
