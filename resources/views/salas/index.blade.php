@extends('main')
@section('content')
@forelse($salas as $sala)
@include('salas.partials.fields')
<br>
@empty
    Não retornaram nemhum registro de sala
@endforelse
@endsection
