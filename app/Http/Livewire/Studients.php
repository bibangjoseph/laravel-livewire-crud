<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Studient;

/**
 * Undocumented class
 * 
 */

class Studients extends Component
{
    /*
     * Undocumented variable
     *
     * @var [type]
     */
    public $matricule, $name, $email, $phone;

    /**
     * Undocumented function
     *
     * @return void
     */
    public function render()
    {
        $studients = Studient::all();
        return view('livewire.studients', compact('studients'))
        ->layout('livewire.layouts.app');
    }


    /**
     * Undocumented function
     *
     * @return void
     */
    public function storeStudient()
    {
        $data = $this->validate(
            [
                'matricule' => 'required|unique:studients',
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric',
            ]
        );
        $studient = new Studient;
        $studient->fill($data);
        $studient->save();
        session()->flash('message', 'Nouvel étudiant ajouté');
        $this->reset();
        $this->dispatchBrowserEvent('close-modal');
    }

    /**
     * Undocumented function
     *
     * @param [type] $fields Champs
     * 
     * @return void
     */
    public function updated($fields)
    {
        $this->validateOnly(
            $fields, [
            'matricule' => 'required|unique:studients',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            ]
        );
    }
}
