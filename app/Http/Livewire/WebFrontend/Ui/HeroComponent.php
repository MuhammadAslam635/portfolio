<?php

namespace App\Http\Livewire\WebFrontend\Ui;

use Livewire\Component;
use App\Models\Hero;

class HeroComponent extends Component
{
    public function render()
    {


        return <<<'blade'
        @php
        $hero=DB::table("heroes")->where("status","active")->first();
        @endphp
              @if($hero)
                <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style=" background: url('assets/img/{{$hero->image}}') top center;">
                <div class="hero-container" data-aos="fade-in">
                    <h1>{{$hero->title}}</h1>
                    <p>I'm <span class="typed" data-typed-items="{{$hero->skill}}"></span></p>
                </div>
            </section>
            @else
              <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style=" background: url('assets/img/hero-bg.jpg') top center;">
                <div class="hero-container" data-aos="fade-in">
                    <h1>Muhammad Aslam</h1>
                    <p>I'm <span class="typed" data-typed-items="Laravel Devloper"></span></p>
                </div>
            </section>
            @endif
        blade;
    }
}
