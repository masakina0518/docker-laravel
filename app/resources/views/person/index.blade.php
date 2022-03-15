@extends('layouts.helloapp')


@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
{{$service}}
<table>
        <tr>
            <th>Name</th><th>Mail</th><th>Age</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                {{-- <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td> --}}
            </tr>
        @endforeach
    </table>

@endsection

@section('footer')
copyright 2021
@endsection
