<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\produto;

class ProdutoController extends Controller{
    public function stock(){
        $item = new produto();
        return view
        (
            'project.stock',
            ["item" => $item],
        );
    }

    public function destroy(){

    }
    
}
