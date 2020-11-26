@extends('Plantillaweb')

@section('secciondinamica')
<h1>Lista de clientes</h1>

@foreach($nombres as $i)
<h3 style="color: blue;">{{$i}}</h3>
<p> cliente</p>
@endforeach
@endsection