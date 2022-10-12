<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComonent extends Component
{
  public function render()
  {
    return view('livewire.home-comonent')->layout('layouts.base');
  }
}
