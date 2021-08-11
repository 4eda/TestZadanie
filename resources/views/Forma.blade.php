@extends('layouts.app')
@section('title-block') Форма @endsection 

@section('content')
<div style="background-color:#eeeee7">
<div class="col align-self-center mb-5 mt-5">
<div class="row justify-content-center">
  <h1 class="h3 mt-2 mb-5 font-weight-normal">Пожалуйста заполните форму</h1>
  <div class="col col-lg">
  </div>
    <div class="col sizeMobile" >
        <body class="text-center">
            <form class="form-signin flex-grow"  action="{{ route('forma-form')}}" method="post">
                @csrf
                 <label for="name"  class="sr-only">Введите Имя</label>
                 <input type="text" id="name" name="name" class="form-control mt-2" placeholder="Имя" required="" autofocus="">
                 <label for="family" class="sr-only">Введите Фамилию</label>
                 <input type="text" id="family" name="family" class="form-control mt-2" placeholder="Фамилия" required="" autofocus="">
                 <label for="Otch" class="sr-only">Введите Отчество</label>
                 <input type="text" id="Otch" name="Otch" class="form-control mt-2" placeholder="Отчество" required="" autofocus="">
                 <label for="email" class="sr-only">Введите E-Mail</label>
                 <input type="email" onkeydown="this.style.width = ((this.value.length + 5) * 8) + 'px';" style="min-width: 100%;" id="email" name="email" class="form-control mt-2" placeholder="Email" required="" autofocus="">
              
                 <label for="Phone" class="sr-only">Введите номер телефона</label>
                 <input type="tel"  id="Phone" name="Phone" class="form-control mt-2" placeholder="Телефон" required="">
                 <label for="Adres" class="sr-only">Ваш адрес</label>
                 <input type="text" onkeydown="this.style.width = ((this.value.length + 3) * 8) + 'px';" style="min-width: 100%;" id="Adres" name="Adres" class="form-control mt-2" placeholder="Адрес" required="" autofocus="">
                  
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                 <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.6.0/dist/css/suggestions.min.css" rel="stylesheet" />
                 <script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.6.0/dist/js/jquery.suggestions.min.js"></script>
                 
                 <script>
                     $("#Adres").suggestions({
                         token: "27c609dc9c867f2cf8e590fee741e569074693dc",
                         type: "ADDRESS",
                         /* Вызывается, когда пользователь выбирает одну из подсказок */
                         onSelect: function(suggestion) {
                             console.log(suggestion);
                         }
                     });                    
            
                 </script>
                 <button class="btn btn-lg btn-block mt-2 mb-3" style="background-color: #be1116; color: #ffffff" type="submit">Отправить</button>
                
               </form>

               
          </div>
          <div class="col col-lg">
          </div>
    </div>
</div>
    <hr/>
  </div>
 </div>
    </body>
@endsection


