<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'data_nascimento' => 'required|string|max:50',
            'genero' => 'required|between:0,1'
        ]);

        $contact = new Contact();

        $contact->nome = $request->nome;
        $contact->telefone = $request->telefone;
        $contact->email = $request->email;
        $contact->data_nascimento = $request->data_nascimento;
        $contact->genero = $request->genero;

        $contact->save();

        return view('contact.create');
    }

    public function find($id)
    {
        $contact = Contact::find($id);
        return view('contact.update', $contact);
    }

    public function list()
    {
        $contact = new Contact();
        $contacts = $contact->get();
        return view('contact.list', ['contacts'=>$contacts]);
    }  

    public function delete()
    {
        var_dump('');
        die();
        // aqui só precisa deletar o usuário, não precisa retornar nada
        $del = Contact::drop();
        $del->delete();        
    }  
}