<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use App\Models\Session;
use Livewire\Component;

class Home extends Component
{
    public $texto;
    public $session;

    public function enviar()
    {
        $dados = Session::where("id", session()->getId())->first();
        Chat::create([
            "nome" => $dados->nome,
            "texto" => $this->texto,
            "id_session" => session()->getId(),
        ]);
        $this->texto = "";
     }

    public function mount()
    {
     $this->session = session()->getId();
     }


    public function render()
    {
        $dados = Chat::get();
        return view('livewire.home',[
            'dados' => $dados,
        ]);
    }
}
