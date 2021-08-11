@extends('layouts.app')
@section('title-block') Список пользователей @endsection 

@section('content')

<div class="container">
  <table class="table" style="background-color: #3d4b53; color:rgb(252, 252, 252)">
    <thead>
      <tr>
        <th >id</th>
        <th >Имя</th>
        <th >Фамилия</th>
        <th >Отчество</th>
        <th >Телефон </th>
        <th >E-mail</th>
        <th >Адрес</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $el)
      <tr>
        <th data-label="id">{{$el->id}}</th>
        <td data-label="Имя">{{$el->name}}</td>
        <td data-label="Фамилия">{{$el->family}}</td>
        <td data-label="Отчество">{{$el->otch}}</td>
        <td data-label="Телефон">{{$el->phone}}</td>
        <td data-label="E-mail">{{$el->email}}</td>
        <td data-label="Адрес">{{$el->adres}}</td>
        <td><button class="btn btn-danger">
          <a class="text-white" href="{{route ('delete-one', $el->id )}}">
          Удалить</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

             <div class="danger">{{$data->links()}} </div>
  
 
    </body>
@endsection
    

<style>
* {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
}

.container {
  min-width: 320px;
  max-width: 100%;
  padding: 0 15px;
  box-sizing: border-box;
}

table {
  border-collapse: collapse;
  width: 100%;
  margin: 20px 0;
}

table td, table th {
  padding: 10px;
  border: 1px solid #e2dfdf;
}



@media (max-width: 720px) {

  .container table thead {
    display: none;
  }

  .container table tr {
    display: block;
  }

  .container table td {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
  }

  .container table td::before {
    content: attr(data-label);
    font-weight: bold;
    margin-right: 20px;
  }

}

</style>