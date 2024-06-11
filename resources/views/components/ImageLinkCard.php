<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageLinkCard extends Component
{
    public $imageUrl;
    public $imageAlt;
    public $title;
    public $description;
    public $buttonUrl;
    public $buttonText;

    public function __construct($imageUrl, $imageAlt, $title, $description, $buttonUrl, $buttonText)
    {
        $this->imageUrl = $imageUrl;
        $this->imageAlt = $imageAlt;
        $this->title = $title;
        $this->description = $description;
        $this->buttonUrl = $buttonUrl;
        $this->buttonText = $buttonText;
    }

    public function render()
    {
        return view('components.image-link-card');
    }
}
