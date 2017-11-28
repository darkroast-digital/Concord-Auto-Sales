<?php

return function($site, $pages, $page) {
    $form = uniform('contact-form', [
        'required' => [
            'name'  => '',
            'last-name'  => '',
						'phone' => '',
            '_from' => 'email'
        ],
        'actions' => [
            [
                '_action' => 'email',
                'to'      => 'info@concordautosales.ca',
                'sender'  => 'info@concordautosales.ca',
                'subject' => 'New Message From The Contact Form On Concord Auto Sales'
            ]
        ]
    ]);

    return compact('form');
};