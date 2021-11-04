@extends('master')
@section('title') IFISH | {{ $title }} @endsection
@section('heading_1') DASHBOARD @endsection
@section('dashboard') active @endsection
@section('content')

    <div class="row">
        <h2 class="m-2 text-dark"> Label </h2>
        @for ($i = 0; $i < count($label); $i++)
        {{ $label[$i] }}
    @endfor
    </div>

    <div class="row">
        <h2 class="m-2 text-dark"> Income </h2>
        @for ($i = 0; $i < count($incomes); $i++)
        {{ $incomes[$i] }}
    @endfor
    </div>

    <div class="row">
        <h2 class="m-2 text-dark"> Expanse </h2>
        @for ($i = 0; $i < count($expanses); $i++)
        {{ $expanses[$i] }}
    @endfor
    </div>
    <script>
        //ini di pake buat di taro yg kata kemaren tuh, income ama expanses buat price, label buat bulan"nya
        var incomes = {!! json_encode($incomes, JSON_HEX_TAG) !!}
        var expanses = {!! json_encode($expanses, JSON_HEX_TAG) !!}
        var label = {!! json_encode($label, JSON_HEX_TAG) !!}
    </script>
@endsection