@if (Auth::user()->is_wanting($item->code))
    {!! Form::open(['route' => 'item_user.dont_want', 'method' => 'delete']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Unwanted', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => 'item_user.want']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Want it', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endif