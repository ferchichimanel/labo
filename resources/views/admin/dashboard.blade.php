@extends(backpack_view('blank'))

@php
    Widget::add([
        'type'    => 'div',
        'class'   => 'row',
        'content' => [
            [ 'type' => 'chart', 'controller' => \App\Http\Controllers\Admin\Charts\NewEntriesChartController::class ],
           
            
        ]
    ]);
@endphp


@section('content')
@endsection

