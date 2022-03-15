@extends('layouts.helloapp')


@section('title', 'Index')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <form action="/hello/del" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <table>
            <tr>
                <th>Name</th><td>{{$form->name}}</td>
            </tr>
            <tr>
                <th>Mail</th><td>{{$form->mail}}</td>
            </tr>
            <tr>
                <th>Age</th><td>{{$form->age}}</td>
            </tr>
            <tr>
                <th></th><td><input type="submit" value="send"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
copyright 2021
@endsection