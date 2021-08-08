@extends('layouts.app')
@section('title-block') Главная @endsection 

@section('content')
<div class="container p-2 mb-3" style="background-color:#eeeee7">
    @foreach ($data as $el)
<div>
   <div class=""> <h5>{{ date('d-m-Y',$el['idate'])}}
      <a class="pl-1" href="{{route ('News-One', $el->id)}}"> {!!$el->title!!}</a> </h5>
   </div>
   <div class="mt-3"> <p> {!!$el->announce!!}</p> </div>
</div>
    <hr>
    @endforeach
</div>
<div class=col>

{{$data->links()}} 




@endsection
