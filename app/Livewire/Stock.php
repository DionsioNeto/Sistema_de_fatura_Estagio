<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\produto;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Stock extends Component{
    use WithFileUploads;

    public $lancament;


    protected $rules = [
        'lancament' => 'required|mimes:jpg,jpeg,png,bmp,tiff,webp,mp4,mp3,pdf|max:10240', // Permitindo diferentes tipos de arquivos
        'capa' => 'required|mimes:jpg,jpeg,png,bmp,tiff,webp',
        'description' => 'required|min:20',
    ];


    // Atualizar o arquivo e gerar URL temporária
    // public function updatedFile() {
    //     $this->validateOnly('file'); // Valida somente o campo 'file'
    //     if ($this->file) {
    //         $this->fileUrl = $this->file->temporaryUrl();
    //         $this->fileType = $this->file->getClientOriginalExtension();
    //     }
    // }

    // Validação independente para a capa
    public function updatedCapa() {
        $this->validateOnly('capa'); // Valida somente o campo 'capa'
    }

    public function store(){
        $cont = new produto();
        $this->validate();
        $cont->description = $this->lancament;
        // $cont->user_id = auth()->user()->id;


        // //uploads da capa do arquivo

        // $capa = $this->capa;
        // $extension = $capa->extension();
        // $CapaName = md5($capa->getClientOriginalName() . strtotime('now')).".".$extension;
        // $cont->capa = $CapaName;
        // // Armazenar o arquivo no diretório 'uploads'
        // $this->capa->storeAs('uploads', $CapaName, 'public');

        if($cont->save()){

            $this->lancament = null;

            session()->flash('msg', 'Sucesso');
        }else{
            session()->flash('error', 'erro');
        }


    }

    public function render(){
        return view('livewire.stock');
    }
}
