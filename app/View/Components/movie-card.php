<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MovieCard extends Component
{
    public $movie;
    public $date;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($movie, $date)
    {
        return $this->movie = $movie;
        return $this->date = $date;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
