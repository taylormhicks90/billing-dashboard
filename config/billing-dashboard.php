<?php

return [
    'plans' => [
        [
            [
                'id' => 'plan-1',
                'name' => 'Standard',
                'short_description' => 'This is a short, human friendly description of the plan.',
                'monthly_id' => 'price_id',
                'yearly_id' => 'price_id',
                'additional_products'=>
                    [
                        'price_id',
                    ],
                'features' => [
                    'Feature 1',
                    'Feature 2',
                    'Feature 3',
                ],
            ],
        ]
    ],
];
