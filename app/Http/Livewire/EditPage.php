<?php

namespace App\Http\Livewire;

use App\Models\links;
use App\Models\pages;
use Livewire\Component;

class EditPage extends Component
{
    public $link;
    public $linkname;
    public $pageid;
    protected $rules = [
        'link' => 'required|string|url',
        'linkname' => 'required|string'
    ];
    public function render()
    {
        return view('livewire.edit-page', [
            'links' => links::where('page_id', $this->pageid)->get(),
            'detail_page' => pages::find($this->pageid)
        ]);
    }
    public function add_link()
    {
        $this->validate();
        links::create([
            'page_id' => $this->pageid,
            'link_name' => $this->linkname,
            'link' => $this->link,
        ]);
        $this->reset('link');
        $this->reset('linkname');
    }
    public function delete_link($id_link)
    {
        links::find($id_link)->delete();
    }
}
