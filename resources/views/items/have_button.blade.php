@if (Auth::user()->is_having($item->code))
    {!! Form::open(['route' => 'item_user.dont_have', 'method' => 'delete']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('not have', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => 'item_user.have']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('have it', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@endif