<?php

return [
    'email' => 'Некорректный адрес электронной почты',
    'custom' => [
        'email' => [
            'required' => 'Введите адрес электронной почты',
        ],
        'password' => [
            'required' => 'Введите пароль',
            'min' => 'Длина пароля должна быть не менее :min символов',
            'confirmed' => 'Пароль и подтверждение не совпадают'
        ],
        'password_confirmation' => [
            'required' => 'Введите подтверждение пароля',
            'same' => 'Пароль и подтверждение не совпадают'
        ],
        'name' => [
            'required' => 'Введите имя',
        ],
    ],
];