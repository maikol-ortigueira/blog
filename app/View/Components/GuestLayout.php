<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    protected $footer = [
        'menus' => [
            'resources' => [
                [
                    'text' => 'Rodolfo Ucha Piñeiro',
                    'link' => 'https://www.cifprodolfoucha.es/',
                ],
                [
                    'text' => 'Maikol Fustes',
                    'link' => 'http://maikol.eu',
                ],
            ],
            'Follow us' => [
                [
                    'text' => 'github',
                    'link' => 'https://github.com/dwcs-ucha/grupo02-21',
                ],
            ],
            'Legal' => [
                [
                    'text' => 'Privacy Policy',
                    'link' => 'privacy-policy',
                ],
                [
                    'text' => 'Terms & Conditions',
                    'link' => 'terms-of-service'
                ],
            ],
        ]
    ];
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.guest', ['footer' => $this->footer]);
    }
}
