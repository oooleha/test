<?php
/**
 * Написать функцию которая из этого массива
 */
$data1 = [
    'parent.child.field' => 1,
    'parent.child.field2' => 2,
    'parent2.child.name' => 'test',
    'parent2.child2.name' => 'test',
    'parent2.child2.position' => 10,
    'parent3.child3.position' => 10,
];

echo '<hr>'.'<p>';


print_r (array_flip($data1));
echo '<hr>'.'<p>';
print_r (array_reverse($data1, SORT_DESC));
echo '<hr>'.'<p>';



//сделает такой и наоборот
/* $data = [
    'parent' => [
        'child' => [
            'field' => 1,
            'field2' => 2,
        ]
    ],
    'parent2' => [
        'child' => [
            'name' => 'test'
        ],
        'child2' => [
            'name' => 'test',
            'position' => 10
        ]
    ],
    'parent3' => [
        'child3' => [
            'position' => 10
        ]
    ],
];
*/
