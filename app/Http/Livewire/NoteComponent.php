<?php

namespace App\Http\Livewire;
use App\Models\Note;
use Livewire\Component;
//php artisan make:livewire noteComponent
class NoteComponent extends Component
{
    public $title= "Notas";
    public $content="";
    public $status="";
    public function render()
    {
        //select *from notes
        $notes = Note::all();
        return view('livewire.note-component',['notes'=> $notes]);
    }
    public function store()
    {
        //insert into....
        Note::create (["content" => $this->content]);
        $this->status ="Noted aded";
    }
    public function update(Note $note)
    {
        //$note = Note::find($id);
        $note->content = $this->content;
        $note->save();
        $this->status = "Note updated";
    }
    public function destroy($id)
    {
        //delete from notes....
        Note::destroy($id);
        $this->status= "Noted deleted";
    }
}
