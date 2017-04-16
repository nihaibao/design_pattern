<?php
/**
 * Created by PhpStorm.
 * User: ellipsis
 * Date: 2017/4/16
 * Time: 下午3:56
 */

namespace Ellips\Pat\AbstractFactory\Html;

use Ellips\Pat\AbstractFactory\Picture as BasePicture;

/**
 * Class Picture
 * @package Ellips\Pat\AbstractFactory\Html
 */
class Picture extends BasePicture
{
    /**
     * @return string
     */
    public function render()
    {
        return sprintf('<img src="%s" title="%s"/>', $this->path, $this->name);
    }
}
