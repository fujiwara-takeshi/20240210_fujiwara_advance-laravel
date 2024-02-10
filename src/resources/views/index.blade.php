@extends('layouts.default')
<style>
    th {
        background-color: #289adc;
        color: white;
        padding: 5px 40px;
    }
    tr:nth-child(odd) td {
    background-color: #ffffff;
    }
    td {
        padding: 25px 40px;
        background-color: #eeeeee;
        text-align: center;
    }
    svg.w-5.h-5 {
        width: 30px;
        height: 30px;
    }
</style>
@section('title', 'index.blade.php')

@section('content')
<table>
    <tr>
        <th>Data</th>
    </tr>
    @foreach($authors as $author)
    <tr>
        <td>{{$author->getDetail()}}</td>
    </tr>
    @endforeach
</table>
{{$authors->links()}}
@endsection