@extends('main')
@section('content')
@forelse($mesas as $mesa)
@include('mesas.partials.fields')
<br>
@empty
    Não retornaram nemhum registro de mesas
@endforelse
@endsection
