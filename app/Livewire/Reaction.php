<?php

namespace App\Livewire;

use App\Events\ReactionEvent;
use Livewire\Attributes\On;
use Livewire\Component;
use TallStackUi\Traits\Interactions as TraitsInteractions;

class Reaction extends Component
{
    use TraitsInteractions;

    public function render()
    {
        return view('livewire.reaction');
    }

    public function sending(): void 
    {
        broadcast(new ReactionEvent())
        ->toOthers()
        ;
        $this->receive();
    }

    #[On('echo:reaction,ReactionEvent')]
    public function receive(): void
    {
        $this->toast()
        ->success('Done!', 'You raction has been successfully!')
        ->send();
    }
}
