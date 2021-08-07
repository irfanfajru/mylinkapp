<?php

namespace App\Http\Livewire;

use App\Models\links;
use App\Models\pages;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddPage extends Component
{
    public $page_name;
    protected $rules = [
        'page_name' => 'required|string|max:10',
    ];

    public function render()
    {

        return view('livewire.add-page', [
            'pages' => pages::where('user_id', Auth::user()->id)->get()->count(),
            'manage_pages' => pages::where('user_id', Auth::user()->id)->get(),
        ]);
    }

    public function add_page()
    {
        $this->validate();
        if ($this->cek_page()) {
            if ($this->cek_name()) {
                session()->flash('message', 'Page name already used');
            } else {
                pages::firstOrCreate([
                    'user_id' => Auth::user()->id,
                    'page_name' => $this->page_name,
                    'theme' => 0,
                ]);
                session()->flash('message', 'Page ' . $this->page_name . ' Succesfull added');
            }
        } else
            session()->flash('message', 'You Already have maximum pages');
    }

    public function cek_page()
    {
        if (pages::where('user_id', '=', Auth::user()->id)->get()->count() < 3) {
            return true;
        } else {
            return false;
        }
    }

    public function cek_name()
    {
        if (pages::where('page_name', '=', $this->page_name)->exists()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_page($id)
    {
        if (pages::where('user_id', '=', Auth::user()->id)->where('id', $id)->exists()) {
            pages::find($id)->delete();
        }
    }
}
