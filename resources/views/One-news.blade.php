@extends('layouts.app')
  
@section('title-block') {{$data->title}} @endsection 

@section('content')
<div class="container mt-3" style="background-color:#eeeee7"> 
<h3 class="">{!!$data->title!!}</h3>
<hr>
<div class="row mt-3">
    <p>{!!$data->content!!}</p>
    <hr>
    <a class="btn btn-primary btn-lg active mb-4" style="max-width:200px" role="button" aria-pressed="true" href="{{route('news-data')}}">Все новости</a>
</div>

@endsection