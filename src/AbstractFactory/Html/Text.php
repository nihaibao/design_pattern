<?php
/**
 * Created by PhpStorm.
 * User: ellipsis
 * Date: 2017/4/16
 * Time: 下午3:58
 */

namespace Ellips\Pat\AbstractFactory\Html;

use Ellips\Pat\AbstractFactory\Text as BaseText;

/**
 * Class Text
 * @package Ellips\Pat\AbstractFactory\Html
 */
class Text extends BaseText
{
    /**
     * @return string
     */
    public function render()
    {
        return '<div>' . htmlspecialchars($this->text) . '</div>';
    }
}
