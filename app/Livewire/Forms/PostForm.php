<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class PostForm extends Form
{

    #[Rule('required')]
    public $body = '';

    function store()
    {
        $post = Auth::user()->posts()->create($this->validate());

        flash('Post created successfully!');

        $this->reset();
        return $post;
    }
}
