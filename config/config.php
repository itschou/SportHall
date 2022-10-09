<?php


return [
    //Basics

    'basics' => [
        'nom' => 'Votre site web',
        'description' => 'Description de votre site web',
        'no-account' => 'Vous n\'avez pas de compte ?',
        'have-account' => 'Vous avez déjà un compte ?',
        'remember' => 'Se souvenir de moi',
        'logout' => 'Deconnexion',
        'signup' => 'S\'enregistrer',
        'login' => 'Se connecter',
        'medias-message' => 'Rejoignez nous sur :',
        
    ],

    


    //Social Medias

    'medias' => [
        'instagram' => 'https://instagram.com/chouuyt',
        'facebook' => 'https://instagram.com/chouuyt',
        'linkedin' => 'https://www.linkedin.com/feed/'
    ],

    // nav links

    'links' => [
        'Qui somme nous ?' => "{{ route('signout') }}",
        'Nous rejoindre' => "{{ route('signout') }}"
    ]
];