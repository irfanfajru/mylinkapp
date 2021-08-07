<?php

namespace App\Http\Livewire;

use App\Models\pages;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class ShowPages extends Component
{
    public function render()
    {
        return view('livewire.show-pages',[
            'pages'=> pages::where('user_id','=',Auth::user()->id)->get(),
        ]);
    }
}
