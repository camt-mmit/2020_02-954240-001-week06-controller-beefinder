@extends('layouts.main')

@section('title',$title)

@section('content')
  <p>
    <b> Member Type :: </b>
    <spam> {{ $memberType }}</span>
    <br />
    <b> Price :: </b>
    <span> {{ $price }}</span>
    <br />
    <b> Discount :: </b>
    <span> {{ number_format($discount,2) }}</span>
    <br />
    <b> Discount cost ::</b>
    <span> {{ number_format($discountCost,2) }}</span>
    <br />
    <b> Net price :: </b>
    <span> {{ number_format($netprice,2) }}</span>
    <br />
  </p>
@endsection