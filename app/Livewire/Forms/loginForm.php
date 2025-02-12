<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class loginForm extends Form
{
    #[Rule('required', 'email')]
    public string $email = '';
    #[Rule('required',)]
    public string $password = '';

    public function store()
    {
        if (Auth::attempt($this->validate())) {
            return redirect()->route('login');
        }

        throw ValidationException::withMessages([
            'form.email' => 'The provide credencials do not match our records',
        ]);
    }
}
