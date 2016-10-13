<?php

return [
    //параметры
    params=>[
        'rowCount'=>       3,      //количество строк таблицы
        'columnCount'=>    3,      //количество столбцов таблицы
        'tdWidth'=>        "200",  //ширина ячейки
        'tdHeight'=>       "200"   //высота ячейки 
    ],

    //входящие данные
    data=>[
        array( 'text' => 'Текст красного цвета'
                , 'cells' => '1,2,4,5'              //задается прямоугольная область, начиная с левого верхнего угла
                , 'align' => 'center'
                , 'valign' => 'center'
                , 'color' => 'FF0000'
                , 'bgcolor' => '0000FF'),
        array( 'text' => 'Текст зеленого цвета'
                , 'cells' => '8,9'
                , 'align' => 'right'
                , 'valign' => 'bottom'
                , 'color' => '00FF00'
                , 'bgcolor' => 'FFFFFF')
        ]
];

?> 
