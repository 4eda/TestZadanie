@extends('layouts.app')
@section('title-block') Список пользователей @endsection 

@section('content')

    <div class="col-md-auto">
            
            <table class="table" style="background-color: #3d4b53; color:white" >
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Отчество</th>
                    <th scope="col">Телефон </th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Адрес</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $el)
                  <tr>
                    <th scope="row">{{$el->id}}</th>
                    <td>{{$el->name}}</td>
                    <td>{{$el->family}}</td>
                    <td>{{$el->otch}}</td>
                    <td>{{$el->phone}}</td>
                    <td>{{$el->email}}</td>
                    <td>{{$el->adres}}</td>
                    <td><button class="btn btn-danger">
                      <a class="text-white" href="{{route ('delete-one', $el->id )}}">
                      Удалить</button></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

             <div class="danger">{{$data->links()}} </div>
  
  </div>
    </body>
@endsection
    

