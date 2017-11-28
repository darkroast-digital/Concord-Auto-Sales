<?php

return function($site, $pages, $page) {
    $form = uniform('financing-form', [
        'required' => [
            'name'  => '',
        ],
        'actions' => [
            [
                '_action' => 'email',
                'to'      => 'info@concordautosales.ca',
                'sender'  => 'info@concordautosales.ca',
                'subject' => 'New Financing Request from Concord Auto Sales'
            ]
        ]
    ]);

    return compact('form');
};