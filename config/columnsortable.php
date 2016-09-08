<?php

return [

    /*
    Spec columns.
    */
    'columns' => [
        'alpha_columns'    => [
            'rows' => ['description', 'email', 'name', 'slug'],
            'class' => '',
        ],
        'amount_columns'   => [
            'rows' => ['amount', 'price'],
            'class' => ''
        ],
        'numeric_columns'  => [
            'rows' => ['created_at', 'updated_at', 'level', 'id', 'phone_number'],
            'class' => ''
        ],
    ],

    /*
    Defines icon set to use when sorted data is none above.
    */
    'default_icon_set' => '',

    /*
    Icon that shows when generating sortable link while column is not sorted.
    */
    'sortable_icon'    => '',

    /*
    Default anchor class, if value is null none is added. (must be type of null)
    */
    'anchor_class'      => null,

    /*
    Relation - column separator. ex: detail.phone_number means relation "detail" and column "phone_number".
     */
    'uri_relation_column_separator' => '.'

];
