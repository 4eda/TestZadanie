<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forma;
use App\Http\Requests\FormaRequest;
class FormaController extends Controller
{
    public function submit(FormaRequest $req){
        $Forma = new Forma();
        $Forma-> name= $req->input('name');
        $Forma-> family= $req->input('family');
        $Forma-> otch= $req->input('Otch');
        $Forma-> phone= $req->input('Phone');
        $Forma-> email= $req->input('email');
        $Forma-> adres= $req->input('Adres');
    
        $Forma->save();
        return redirect()->route('users-data')->with('success','Ваши данные добавлены');
    }

    public function allData(){
        $Forma = new Forma;
        // $contact->orderBy('id', 'asc')->skip(1)->take(1)->get()]);
   return view('Users', ['data' =>$Forma -> orderBy('id', 'desc')->paginate(5)]);
}

public function deleteOne ($id){
    Forma::find($id)->delete();
    return redirect()->route('users-data')->with('success','Успешно удалено');

}
}