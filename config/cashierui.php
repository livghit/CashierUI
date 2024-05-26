<?php

// config for LivGhit/CashierUI
return [

    // use this for one time purchase Products
    'products' => [
        [
            'name' => 'Starter',
            'short_description' => 'Enhance youre experience on our Platform',
            // ... continue with fields you want to have access to in the dashboard
        ],
    ],
    // use this for subscription based
    'plans' => [
        [
            'name' => 'Starter',
            'short_description' => 'Enhance youre experience on our Platform',
            'price_id_monthly' => env('STRIPE_SUBSCRIPTION_STARTER_MONTH'),
            'price_id_yearly' => env('STRIPE_SUBSCRIPTION_STARTER_YEAR'),
            'price_monthly' => 9.99,
            'price_yearly' => 99.99,
            'features' => [
                '10 Inserate gleichzeitig',
                'Inserate gehen nach 1h schon online',
                'Sie haben die Möglichkeit anzusehen wer interesse an Ihre Produkte hat',
            ],
            'archived' => false,
        ],
        [
            'name' => 'Full Access',
            'short_description' => 'Gain access to all new and old Features.',
            'price_id_monthly' => env('STRIPE_SUBSCRIPTION_FULL_MONTH'),
            'price_id_yearly' => env('STRIPE_SUBSCRIPTION_FULL_YEAR'),
            'price_monthly' => 29.99,
            'price_yearly' => 299.99,
            'features' => [
                'Unbegrenzte Inserate gleichzeitig',
                'Inserate gehen sofort online',
                'Sie haben zugriff auf alle Dashboards features die implementiert sind und werden',
            ],
            'archived' => false,
        ],
    ],
];
