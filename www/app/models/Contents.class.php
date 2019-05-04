<?php

namespace app\Models;
use app\Core\BaseSQL;
use app\Core\Routing;
use app\Core\View;

class Contents extends BaseSQL
{

    public function __construct($id = null)
    {
        parent::__construct($id);
    }

    public function customSet($attr, $value)
    {
        return trim($value);
    }

    public static function getBySlug($slug)
    {
        $content = new Contents();
        $content->getOneBy(['slug' => $slug], true);

        if ($content->__get('id')) {
            return $content;
        }

        return false;
    }

    public function show()
    {
        $v = new View("content", "front");
        $v->assign('page_title', $this->__get('title'));
        $v->assign('page_desc', $this->__get('description '));
        $v->assign('content', $this);
    }

    public function content()
    {
        echo $this->__get('content');
    }

    public function getFormContents()
    {
        return [
            'create' => [
                "config" => [
                    "action" => Routing::getSlug("Contents", "createContents"),
                    "method" => "POST",
                    "class" => "",
                    'header' => 'Ajouter un nouveau  contenu',
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
                    "type" => [
                        "type" => "select",
                        "class" => "col-4",
                        "label" => "Type",
                        "id" => "type",
                        "placeholder" => "",
                        "required" => true,
                        "error" => "Selectioner type",
                        "options" => [
                            ["label" => "Page", "value" => "page"],
                            ["label" => "Article", "value" => "article"],
                        ],
                    ],
                    "title" => [
                        "type" => "text",
                        "label" => "Titre",
                        "placeholder" => "Votre titre",
                        "class" => "input-control col-4",
                        "id" => "title",
                        "required" => true,
                        "minlength" => 2,
                        "maxlength" => 100,
                        "error" => "Votre titre doit faire entre 2 et 100 caractères"
                    ],
                    "description" => [
                        "type" => "textarea",
                        "label" => "Description",
                        "class" => "test lol",
                        "id" => "description",
                        "placeholder" => "",
                        "required" => true,
                        "error" => "Votre titre doit faire entre 2 et 100 caractères"
                    ],
                    "slug" => [
                        "type" => "slug",
                        "label" => "Lien permanent",
                        "class" => "",
                        "presed" => $_SERVER['SERVER_NAME'],
                        "id" => "slug",
                        "placeholder" => "",
                        "required" => true,
                        "minlength" => 2,
                        "maxlength" => 100,
                        "error" => "Votre titre doit faire entre 2 et 100 caractères"
                    ],

                    "file" => [
                        "type" => "file",
                        "id" => "fileToUpload",
                        "required" => false,
                        "label" => "Ajouter une image",
                        "class" => ""
                    ],

                    'published' => [
                        'type' => 'checkbox',
                        'id' => 'published',
                        'label' => 'Publié',
                        "required" => false,
                    ],

                    "content" => [
                        "type" => "textarea",
                        "label" => "Contenue",
                        "class" => "textare-control editor",
                        "id" => "content",
                        "placeholder" => "",
                        "required" => true,
                        "minlength" => 2,
                        "maxlength" => 100,
                        "error" => "Votre titre doit faire entre 2 et 100 caractères"
                    ],

                ]
            ],
            'update' => [
                "config" => [
                    "action" => Routing::getSlug("Contents", "updateContent"),
                    "method" => "POST",
                    "class" => "",
                    'header' => 'Modification du contenu',
                    'action_type' => 'update'

                ],
                "btn" => [
                    "submit" => [
                        "type" => "submit",
                        "text" => "Modifier",
                        "class" => "btn btn-success-outline"
                    ],
                ],
                "data" => [
                    "type" => [
                        "type" => "select",
                        "class" => "col-4",
                        "label" => "Type",
                        "id" => "type",
                        "placeholder" => "",
                        "required" => true,
                        "error" => "Selectioner type",
                        "options" => [
                            ["label" => "Page", "value" => "page"],
                            ["label" => "Article", "value" => "article"],
                        ],
                    ],
                    "title" => [
                        "type" => "text",
                        "label" => "Titre",
                        "placeholder" => "Votre titre",
                        "class" => "input-control col-4",
                        "id" => "title",
                        "required" => true,
                        "minlength" => 2,
                        "maxlength" => 100,
                        "error" => "Votre titre doit faire entre 2 et 100 caractères"
                    ],
                    "description" => [
                        "type" => "textarea",
                        "label" => "Description",
                        "class" => "test lol",
                        "id" => "description",
                        "placeholder" => "",
                        "required" => true,
                        "error" => "Votre titre doit faire entre 2 et 100 caractères"
                    ],
                    "slug" => [
                        "type" => "slug",
                        "label" => "Lien permanent",
                        "class" => "",
                        "presed" => $_SERVER['SERVER_NAME'],
                        "id" => "slug",
                        "placeholder" => "",
                        "required" => true,
                        "minlength" => 2,
                        "maxlength" => 100,
                        "error" => "Votre titre doit faire entre 2 et 100 caractères"
                    ],

                    "file" => [
                        "type" => "file",
                        "id" => "fileToUpload",
                        "required" => false,
                        "label" => "Ajouter une image",
                        "class" => ""
                    ],

                    'published' => [
                        'type' => 'checkbox',
                        'id' => 'published',
                        'label' => 'Publié',
                        "required" => false,
                    ],

                    "content" => [
                        "type" => "textarea",
                        "label" => "Contenue",
                        "class" => "textare-control editor",
                        "id" => "content",
                        "placeholder" => "",
                        "required" => true,
                        "minlength" => 2,
                        "maxlength" => 100,
                        "error" => "Votre titre doit faire entre 2 et 100 caractères"
                    ],

                ]
            ]
        ];
    }
}
