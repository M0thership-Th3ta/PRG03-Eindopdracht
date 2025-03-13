<?php
//get data from the json file and decode it for use in php
function getVtubers(): array
{
    return [
        "hololive" => [
            [
                "name" => "Sakura Miko",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/miko.png?raw=true",
                "details" => [
                    "debut" => "2018/08/01",
                    "languages" => ["Japanese"],
                    "sub_group" => "Hololive JP Gen 0"
                ]
            ],
            [
                "name" => "Shirikami Fubuki",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/fubuki.png?raw=true",
                "details" => [
                    "debut" => "2018/06/01",
                    "languages" => ["Japanese"],
                    "sub_group" => "Hololive JP Gen 1 and Hololive GAMERS"
                ]
            ],
            [
                "name" => "Ookami Mio",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/mio.png?raw=true",
                "details" => [
                    "debut" => "2019/04/06",
                    "languages" => ["Japanese"],
                    "sub_group" => "Hololive GAMERS"
                ]
            ],
            [
                "name" => "Nekomata Okayu",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/okayu.png?raw=true",
                "details" => [
                    "debut" => "2018/12/07",
                    "languages" => ["Japanese"],
                    "sub_group" => "Hololive GAMERS"
                ]
            ],
            [
                "name" => "Yukihana Lamy",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/lamy.png?raw=true",
                "details" => [
                    "debut" => "2020/08/12",
                    "languages" => ["Japanese"],
                    "sub_group" => "Hololive JP Gen 5"
                ]
            ],
            [
                "name" => "Shishiro Botan",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/botan.png?raw=true",
                "details" => [
                    "debut" => "2020/08/14",
                    "languages" => ["Japanese"],
                    "sub_group" => "Hololive JP Gen 5"
                ]
            ],
            [
                "name" => "Pavolia Reine",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/reine.png?raw=true",
                "details" => [
                    "debut" => "2020/12/06",
                    "languages" => ["English", "Japanese"],
                    "sub_group" => "Hololive ID Gen 2"
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
            ],
            [
            "name" => "Tsukumo Sana",
            "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/sana.png?raw=true",
            "details" => [
                "debut" => "2021/08/23",
                "languages" => ["English"],
                "sub_group" => "HoloCouncil"
                ]
            ],
            [
                "name" => "Nerissa Ravencroft",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/nerissa.png?raw=true",
                "details" => [
                    "debut" => "2023/07/31",
                    "languages" => ["English"],
                    "sub_group" => "HoloAdvent"
                ]
            ],
            [
                "name" => "Raora Panthera",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/botan.png?raw=true",
                "details" => [
                    "debut" => "2024/06/22",
                    "languages" => ["English"],
                    "sub_group" => "HoloJustice"
                ]
            ]
        ],
        "nijisanji" => [
            [
                "name" => "Elira Pendora",
                "url" => "https://github.com/M0thership-Th3ta/PRG03-Eindopdracht/blob/main/images/elira.png?raw=true",
                "details" => [
                    "debut" => "2021/05/16",
                    "languages" => ["English"],
                    "sub_group" => "EN"
                ]
            ],
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