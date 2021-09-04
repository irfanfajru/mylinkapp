<?php

namespace App\Http\Livewire;

use App\Models\links;
use App\Models\pages;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditPage extends Component
{
    use WithFileUploads;
    public $link;
    public $linkname;
    public $pageid;
    public $photo;
    public $themes;
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
    public function manage_page()
    {
        if ($this->photo == NULL) {
            $edit = pages::find($this->pageid);
            $edit->theme = $this->themes;
            $edit->save();
        } else {
            $this->validate([
                'photo' => 'image|max:1024',
            ]);
            $filename = $this->photo->store('public');
            $edit = pages::find($this->pageid);
            if ($edit->picture != NULL) {
                Storage::delete($edit->picture);
            }
            if ($this->themes != NULL) {
                $edit->theme = $this->themes;
            }
            $edit->picture = $filename;
            $edit->save();
        }
        $this->reset('photo');
        session()->flash('message', 'Page successfully updated.');
    }
    public function delete_photo()
    {
        $edit = pages::find($this->pageid);
        if ($edit->picture != NULL) {
            Storage::delete($edit->picture);
            $edit->picture = NULL;
        }
        $edit->save();
    }
}
