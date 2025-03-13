<?php
//get data from the json file and decode it for use in php
function getVtubers(): array
{
    return [
        "hololive" => [
            [
                "name" => "Tokino Sora",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/calliope.png?raw=true",
                "details" => [
                    "debut" => "2020/09/12",
                    "languages" => ["English", "Japanese"],
                    "sub_group" => "HoloMyth"
                ]
            ],
            [
                "name" => "Calliope Mori",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/calliope.png?raw=true",
                "details" => [
                    "debut" => "2020/09/12",
                    "languages" => ["English", "Japanese"],
                    "sub_group" => "HoloMyth"
                ]
            ],
            [
                "name" => "Takanashi Kiara",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/kiara.png?raw=true",
                "details" => [
                    "debut" => "2020/09/12",
                    "languages" => ["English", "German", "Japanese"],
                    "sub_group" => "HoloMyth"
                ]
            ]
        ],
        "nijisanji" => [
            [
                "name" => "Selen Tatsuki",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/selen.png?raw=true",
                "details" => [
                    "debut" => "2021/07/17",
                    "languages" => ["English"],
                    "sub_group" => "EN"
                ]
            ],
            [
                "name" => "Scarle Yonaguni",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/scarle.png?raw=true",
                "details" => [
                    "debut" => "2022/07/25",
                    "languages" => ["English", "Spanish"],
                    "sub_group" => "EN"
                ]
            ]
        ],
        "vshojo" => [
            [
                "name" => "Ironmouse",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/ironmouse.png?raw=true",
                "details" => [
                    "debut" => "2017/08/04",
                    "languages" => ["English", "Spanish"],
                    "sub_group" => "N/A"
                ]
            ],
            [
                "name" => "Silvervale",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/silvervale.png?raw=true",
                "details" => [
                    "debut" => "2019/07/30",
                    "languages" => ["English"],
                    "sub_group" => "Mythics"
                ]
            ],
            [
                "name" => "Nyanners",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/nyanners.png?raw=true",
                "details" => [
                    "debut" => "2020/07/17",
                    "languages" => ["English"],
                    "sub_group" => "Mythics"
                ]
            ]
        ],
        "indie" => [
            [
                "name" => "Miori Celesta",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/miori.png?raw=true",
                "details" => [
                    "debut" => "2020/12/20",
                    "languages" => ["English", "Korean"],
                    "sub_group" => "N/A"
                ]
            ]
        ]
    ];
}