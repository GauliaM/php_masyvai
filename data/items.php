<?php

//$items = [
//    'KOMP1' => [
//        'cpu' => "Intel i3",
//        'hdd' => "2TB",
//        'softas' => [
//            'Linux',
//            'WEB Storm'
//        ]
//    ],
//    'KOMP2' => [
//        'cpu' => "Intel i5",
//        'hdd' => '4TB',
//        'softas' => [
//            'Mac OS',
//            'PHP Storm'
//        ]
//    ],
//    'KOMP3' => [
//        'cpu' => "Intel i7",
//        'hdd' => "7TB",
//        'softas' => [
//            'Windows',
//            'PHP storm'
//        ]
//    ]
//];

$data = [
    '5b' => [
        rand(1, 100) => [
            'name' => "Jonas",
            'lastname' => "Petrauskas",
            'date'=> date('y-m-d'),
            'grades'=> [
                'Matematika' => 6,
                'IT' => 9,
                'Anglu Kalba' => 8,
            ]
        ],
        rand(1, 100) => [
            'name' => "Gabrielius",
            'lastname' => "Jakčinskas",
            'date'=> date('y-m-d'),
            'grades'=> [
                'Matematika' => 8,
                'IT' => 3,
                'Anglu Kalba' => 4,
            ]
        ],
        rand(1, 100) => [
            'name' => "Norberta",
            'lastname' => "Stankevičiūtė",
            'date'=> date('y-m-d'),
            'grades'=> [
                'Matematika' => 7,
                'IT' => 7,
                'Anglu Kalba' => 3,
            ]
        ],
        rand(1, 100) => [
            'name' => "Andrius",
            'lastname' => "Žilinskas",
            'date'=> date('y-m-d'),
            'grades'=> [
                'Matematika' => 6,
                'IT' => 6,
                'Anglu Kalba' => 6,
            ]
        ],
        rand(1, 100) => [
            'name' => "Petras",
            'lastname' => "Antrauskas",
            'date'=> date('y-m-d'),
            'grades'=> [
                'Matematika' => 5,
                'IT' => 4,
                'Anglu Kalba' => 7,
            ]
        ]
    ],
    '5a' => [
        rand(1, 100) => [
            'name' => "Sandra",
            'lastname' => "Stanaitytė",
            'date'=> date('y-m-d'),
            'grades'=> [
                'Matematika' => 5,
                'IT' => 10,
                'Anglu Kalba' => 10,
            ]
        ],
        rand(1, 100) => [
            'name' => "Erika",
            'lastname' => "Znaidauskienė",
            'date'=> date('y-m-d'),
            'grades'=> [
                'Matematika' => 4,
                'IT' => 5,
                'Anglu Kalba' => 4,
            ]
        ],
        rand(1, 100) => [
            'name' => "Orinta",
            'lastname' => "Vasiliauskaitė",
            'date'=> date('y-m-d'),
            'grades'=> [
                'Matematika' => 6,
                'IT' => 4,
                'Anglu Kalba' => 2,
            ]
        ],
        rand(1, 100) => [
            'name' => "Marius",
            'lastname' => "Mateika",
            'date'=> date('y-m-d'),
            'grades'=> [
                'Matematika' => 9,
                'IT' => 2,
                'Anglu Kalba' => 7,
            ]
        ],
        rand(1, 100) => [
            'name' => "Donatas",
            'lastname' => "Langauskas",
            'date'=> date('y-m-d'),
            'grades'=> [
                'Matematika' => 8,
                'IT' => 8,
                'Anglu Kalba' => 8,
            ]
        ]
    ]
];