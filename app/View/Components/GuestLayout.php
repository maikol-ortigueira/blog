<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    protected $footer = [
        'menus' => [
            'resources' => [
                [
                    'text' => 'Flowbite',
                    'link' => 'http://flowbite.com'
                ],
                [
                    'text' => 'Tailwind',
                    'link' => 'http://tailwind.com'
                ],
            ],
            'Follow us' => [
                [
                    'text' => 'github',
                    'link' => 'http://github.com'
                ],
                [
                    'text' => 'Discord',
                    'link' => 'http://discord.com'
                ],
            ],
            'Legal' => [
                [
                    'text' => 'Privacy Policy',
                    'link' => 'privacy-policy'
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
