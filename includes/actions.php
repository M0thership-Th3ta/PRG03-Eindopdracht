<?php
/**
 * @return array
 */
function getVTubers(): array
{
    return [
        [
            "id" => 1,
            "name" => "Amelia Watson",
            "generation" => "Holomyth",
        ],
        [
            "id" => 2,
            "name" => "Calliope Mori",
            "generation" => "Holomyth",
        ],
        [
            "id" => 3,
            "name" => "Gawr Gura",
            "generation" => "Holomyth",
        ],
        [
            "id" => 4,
            "name" => "Ina'nis Ninomae",
            "generation" => "Holomyth",
        ],
        [
            "id" => 5,
            "name" => "Takanashi Kiara",
            "generation" => "Holomyth",
        ]
    ];
}

/**
 * @param $id
 * @return array|false
 */
function getVTuberDetails($id): array|false
{
    $tags = [
        1 => [
            "description" => "Hololive's very own detective!",
            "tags" => ['hololive', 'graduated']
        ],
        2 => [
            "recipe" => "guh",
            "tags" => ['hololive', 'reaper', 'rapper']
        ],
        3 => [
            "recipe" => "a",
            "tags" => ['hololive', 'shark', 'fish']
        ],
        4 => [
            "recipe" => "Makes way too many puns.",
            "tags" => ['hololive', 'tasty', 'meat']
        ],
        5 => [
            "recipe" => "Kikkerikki!",
            "tags" => ['hololive', 'phoenix', 'chicken']
        ],
    ];

    return $tags[$id] ?? false;
}
