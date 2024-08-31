@extends('master.front')
@section('title')
    {{__('Orders')}}
@endsection

@section('content')
    <!-- Page Title-->
<!--<div class="page-title">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <ul class="breadcrumbs">-->
<!--                    <li><a href="{{route('front.index')}}">{{__('Home')}}</a> </li>-->
<!--                    <li class="separator"></li>-->
<!--                    <li>{{__('Orders')}}</li>-->
<!--                 </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!-- </div>-->
 <!-- Page Content-->
 <div class="container padding-bottom-3x mb-1 my-3">
    <div class="row">
       @include('includes.user_sitebar')
       <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
        <div class="u-table-res">
          <table class="table table-bordered mb-0">
            <thead>
              <tr>
                <th class="uppercase">{{__('Order')}} #</th>
                <th  class="uppercase">{{__('Total')}}</th>
                <th class="uppercase">{{__('Order Status')}}</th>
                <th class="uppercase">{{__('Payment Status')}}</th>
                <th class="uppercase">{{__('Date Purchased')}}</th>
                <th class="uppercase">{{__('Action')}}</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($orders as $order)
             <tr>
              <td><a class="navi-link uppercase" href="#" data-toggle="modal" data-target="#orderDetails">{{$order->transaction_number}}</a></td>
              <td>
                @if ($setting->currency_direction == 1)
                {{$order->currency_sign}}{{PriceHelper::OrderTotal($order)}}
                @else
                {{PriceHelper::OrderTotal($order)}}{{$order->currency_sign}}
                @endif

              </td>
              <td>
                @if($order->order_status == 'Pending')
                <span class="text-info uppercase">{{$order->order_status}}</span>
                @elseif($order->order_status == 'In Progress')
                <span class="text-warning uppercase">{{$order->order_status}}</span>
                @elseif($order->order_status == 'Delivered')
                <span class="text-success uppercase">	{{$order->order_status}}</span>
                @else
                <span class="text-danger uppercase">{{__('Canceled')}}</span>
                @endif
              </td>
              <td>
                @if($order->payment_status == 'Paid')
                <span class="text-success uppercase">{{$order->payment_status}}</span>
                @else
                <span class="text-danger uppercase">{{$order->payment_status}}</span>
                @endif
              </td>

              <td>{{$order->created_at->format('D/M/Y')}}</td>
              <td>
                  <a href="{{route('user.order.invoice',$order->id)}}" class="btn btn-info btn-sm uppercase">{{__('Invoice')}}</a>
              </td>
            </tr>
             @endforeach
            </tbody>
          </table>
        </div>
            </div>
        </div>

      </div>
    </div>
 </div>


@endsection

