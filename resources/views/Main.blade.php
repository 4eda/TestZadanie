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
<div class="custom-pagination-brand-blue">{{$data->links()}}</div>
    
<div class="custom-pagination-brand-black">{{$data->links('vendor.pagination.simple-bootstrap-4')}}</div> 




@endsection



<style>
    .custom-pagination-brand-blue>.pagination>li>.page-link
{
    color: rgb(0, 0, 0)
}
.custom-pagination-brand-blue>.pagination>li.active>.page-link {
    background: rgb(156, 4, 42);
    border-color: rgb(156, 4, 42);
    color: rgb(250, 248, 248);
}

.custom-pagination-brand-black {
display: none;
}

@media (max-width: 720px) {
  
  
  
.custom-pagination-brand-black {
display: block;
}
.custom-pagination-brand-black>.pagination>li>.page-link
{
    color: rgb(0, 0, 0)
}
.custom-pagination-brand-black>.pagination>li.active>.page-link {
    background: rgb(156, 4, 42);
    border-color: rgb(156, 4, 42);
    color: rgb(250, 248, 248);
}
    

.custom-pagination-brand-blue {
        display: none;
    }
    
}
    
</style>


