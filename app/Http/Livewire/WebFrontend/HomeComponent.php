<?php

namespace App\Http\Livewire\WebFrontend;

use Livewire\Component;
use App\Models\Skill;
use App\Models\About;
class HomeComponent extends Component
{
    public function render()
    {
        $skills=Skill::limit(5)->get();
        $skills2=Skill::orderBy("id",'desc')->limit(5)->get();
        $about=About::first();
        return view('livewire.web-frontend.home-component',['skills'=>$skills,
        'skills2'=> $skills2,'about'=>$about])->layout("layouts.base");
    }
}
