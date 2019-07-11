@extends('layouts.app')

@section('content')
<br /><br /><br />
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order Tracker</div>

                <div class="panel-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif


                      <order-progress status="{{ $order->status_name}}" initial="{{ $order->status_percent }}" order_id="{{ $order->id }}"></order-progress>
                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>



                    <hr>

                    <div class="order-details">
                        <strong>Order ID:</strong> {{ $order->order_id }} <br>
                        <strong>Size:</strong> {{ $order->size }} <br>
                        <strong>Toppings:</strong> {{ $order->toppings }} <br>

                        @if ($order->instructions != '')
                            <strong>Instructions:</strong> {{ $order->instructions }}
                        @endif

                    </div>

                    <a class="btn btn-primary" href="{{ route('user.orders') }}">Back to Orders</a>

                </div> <!-- end panel-body -->
            </div> <!-- end panel -->
        </div>
    </div>
</div>
<br /><br /><br />
@endsection
