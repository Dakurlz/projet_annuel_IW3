<?php

declare(strict_types=1);

namespace Songfolio\Models;

use Songfolio\Core\BaseSQL;

class Menus extends BaseSQL
{
    public function __construct($id = null)
    {
        parent::__construct($id);
    }

    public function customSet($attr, $value)
    {
        switch ($attr) {
            case 'data':
                if (is_array($value)) {
                    return json_encode($value);
                }
                break;
        }

        return $value;
    }

    public function customGet($attr, $value)
    {
        switch ($attr) {
            case 'data':
                return json_decode($value, true);
                break;
        }

        return $value;
    }

    public function show($as)
    {
        switch ($as) {
            case 'menu_edit':
                return $this->show_menu_edit($this->__get('data'));
                break;
        }

        return '';
    }

    public function show_menu_edit($linklist)
    {
        $result = '';

        if(!empty($linklist)){
            foreach ($linklist as $link) {
                $result .= '<li><div class="block block-title" link="' . $link['link'] . '">' . $link['title'] . '</div><a href="#" class="muted del-menu-btn">Supprimer</a><ul class="sortable list-unstyled">';

                if (isset($link['children'])) {
                    $result .= $this->show_menu_edit($link['children']);
                }

                $result .= '</ul></li>';
            }
        }

        return $result;
    }
}
