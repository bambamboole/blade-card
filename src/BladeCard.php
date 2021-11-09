<?php

namespace Bambamboole\BladeCard;

use Laravel\Nova\Card;

class BladeCard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    private string $view = 'blade-card::default';

    private array $data = [];

    public function view(string $view): self
    {
        $this->view = $view;

        return $this;
    }

    public function with(array $data): self
    {
        $this->data = $data;

        return $this;
    }
    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'blade-card';
    }

    public function jsonSerialize()
    {
        return array_merge([
            'view' => view($this->view, ['data' => $this->data])->render()
        ], parent::jsonSerialize());
    }
}
