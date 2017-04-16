<?php
/**
 * Created by PhpStorm.
 * User: ellipsis
 * Date: 2017/4/16
 * Time: 下午3:44
 */

namespace Ellips\Pat\AbstractFactory;

/**
 * Class JsonFactory
 * @package Ellips\Pat\AbstractFactory
 */
class JsonFactory extends AbstractFactory
{
    /**
     * @param $path
     * @param string $name
     * @return Json\Picture
     */
    public function createPicture($path, $name = "")
    {
        return new Json\Picture($path, $name);
    }

    /**
     * @param $content
     * @return Json\Text
     */
    public function createText($content)
    {
        return new Json\Text($content);
    }
}
