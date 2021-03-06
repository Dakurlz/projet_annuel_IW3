<?php

namespace Songfolio\Models;

use Songfolio\Core\BaseSQL;
use Songfolio\Core\Routing;

class Categories extends BaseSQL
{
    public function __construct($id = null)
    {
        parent::__construct($id);
    }

    /**
     * @param array $categories
     * @return array
     */
    public static function prepareCategoriesToSelect(array $categories): array
    {
        $arr = [];
        foreach ($categories as $category){
            $arr[] = ['label' => $category['name'], 'value' => $category['id']];
        }

        return $arr;
    }

    public function getFormAlbumCategories()
    {
        return [

            "create" => [
                "config" => [
                    "action" => Routing::getSlug("Categories", "album"),
                    "method" => "POST",
                    "class" => "",
                    'header' => 'Ajouter une nouvelle catégorie',
                    'action_type' => 'create'
                ],
                "btn" => [
                    "submit" => [
                        "type" => "submit",
                        "text" => "Ajouter",
                        "class" => "btn btn-success-outline"
                    ],
                ],
                "data" => [
                    "name" => [
                        "type" => "text",
                        "name" => "name",
                        "placeholder" => "Saisissez une catégorie",
                        "class" => "input-control",
                        "id" => "name",
                        "required" => true,
                        "minlength" => 2,
                        "maxlength" => 50,
                        "error" => "Votre catégorie doit faire entre 2 et 60 caractères"
                    ]

                ]
            ],
            "update" => [
                "config" => [
                    "action" => Routing::getSlug("Categories", "updateArticle"),
                    "method" => "POST",
                    "class" => "",
                    'header' => 'Modification catégorie',
                    'action_type' => 'update'
                ],
                "btn" => [
                    "submit" => [
                        "type" => "submit",
                        "text" => "Modifé",
                        "class" => "btn btn-success-outline"
                    ],
                ],
                "data" => [
                    "name" => [
                        "type" => "text",
                        "placeholder" => "Saisissez une catégorie",
                        "class" => "input-control",
                        "name" => "name",
                        "id" => "name",
                        "required" => true,
                        "minlength" => 2,
                        "maxlength" => 50,
                        "error" => "Votre catégorie doit faire entre 2 et 60 caractères"
                    ]

                ]
            ]

        ];
    }

    public function getFormArticleCategories()
    {
        return [
            'create' => [
                "config" => [
                    "action" => Routing::getSlug("Categories", "article"),
                    "method" => "POST",
                    "class" => "",
                    'header' => 'Ajouter une nouvelle  catégorie',
                    'action_type' => 'create'
                ],
                "btn" => [
                    "submit" => [
                        "type" => "submit",
                        "text" => "Ajouter",
                        "class" => "btn btn-success-outline"
                    ],
                ],
                "data" => [
                    "name" => [
                        "type" => "text",
                        "placeholder" => "Saisissez une catégorie",
                        "class" => "input-control",
                        "name" => "name",
                        "id" => "name",
                        "required" => true,
                        "minlength" => 2,
                        "maxlength" => 60,
                        "error" => "Votre catégorie doit faire entre 2 et 60 caractères"
                    ],
                ]
            ],
            'update' => [
                "config" => [
                    "action" => Routing::getSlug("Categories", "updateArticle"),
                    "method" => "POST",
                    "class" => "",
                    'header' => 'Modification catégorie',
                    'action_type' => 'update'
                ],
                "btn" => [
                    "submit" => [
                        "type" => "submit",
                        "text" => "Modifié",
                        "class" => "btn btn-success-outline"
                    ],
                ],
                "data" => [
                    "name" => [
                        "type" => "text",
                        "name" => "name",
                        "placeholder" => "Saisissez une catégorie",
                        "class" => "input-control",
                        "id" => "name",
                        "required" => true,
                        "minlength" => 2,
                        "maxlength" => 60,
                        "error" => "Votre catégorie doit faire entre 2 et 60 caractères"
                    ],

                ]
            ]

        ];
    }

    public function getFormEventCategories()
    {
        return [
            "create" => [
                "config" => [
                    "action" => Routing::getSlug("Categories", "event"),
                    "method" => "POST",
                    "class" => "",
                    'header' => 'Ajouter une nouvelle catégorie',
                    'action_type' => 'create'
                ],
                "btn" => [
                    "submit" => [
                        "type" => "submit",
                        "text" => "Ajouter",
                        "class" => "btn btn-success-outline"
                    ],
                ],
                "data" => [
                    "name" => [
                        "type" => "text",
                        "name" => "name",
                        "placeholder" => "Saisissez une catégorie",
                        "class" => "input-control",
                        "id" => "name",
                        "required" => true,
                        "minlength" => 2,
                        "maxlength" => 50,
                        "error" => "Votre catégorie doit faire entre 2 et 60 caractères"
                    ]

                ]
            ],
            "update" => [
                "config" => [
                    "action" => Routing::getSlug("Categories", "updateEvent"),
                    "method" => "POST",
                    "class" => "",
                    'header' => 'Modification catégorie',
                    'action_type' => 'update'
                ],
                "btn" => [
                    "submit" => [
                        "type" => "submit",
                        "text" => "Modifé",
                        "class" => "btn btn-success-outline"
                    ],
                ],
                "data" => [
                    "name" => [
                        "type" => "text",
                        "placeholder" => "Saisissez une catégorie",
                        "class" => "input-control",
                        "name" => "name",
                        "id" => "name",
                        "required" => true,
                        "minlength" => 2,
                        "maxlength" => 50,
                        "error" => "Votre catégorie doit faire entre 2 et 60 caractères"
                    ]

                ]
            ]

        ];
    }
}
