<?php

namespace App\Livewire;

use Livewire\Component;

class Comments extends Component
{

    public $comments = [
        [
            'body' => 'i so much love this , this is a  great feature and i would really want to know more and go deeper into it thanks.',
            'created_at' => '3 mins ago',
            'creator' => 'Gideon'
        ]
    ];

    public function addComment()
    {
      $newComment = [
        'body' => 'That great.',
        'created_at' => '1 mins ago',
        'creator' => 'Bethel'
      ];

     // Option 1: Using array_push()
      array_push($this->comments, $newComment); 

      //dd($this->comments);

      return redirect()->route('comment', ['comments' => $this->comments]);


    }


    public function render()
    {
        return view('livewire.comments')->layout('layouts.app');
    }
}
