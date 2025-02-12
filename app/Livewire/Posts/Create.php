<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{
    public PostForm $form;

    function save()
    {
        $post = $this->form->store();

        $this->dispatch('postCreated', $post->id);
    }
    public function render()
    {
        return view('livewire.posts.create');
    }
}
