@extends('layouts.app')

@section('content')
    <h1>Haveランキング</h1>
    @include('items.items', ['items' => $items, 'type' => 'have'])
@endsection