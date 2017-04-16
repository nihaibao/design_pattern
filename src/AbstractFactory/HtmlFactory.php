<?php
/**
 * Created by PhpStorm.
 * User: ellipsis
 * Date: 2017/4/16
 * Time: 下午3:46
 */

namespace Ellips\Pat\AbstractFactory;

/**
 * Class HtmlFactory
 * @package Ellips\Pat\AbstractFactory
 */
class HtmlFactory extends AbstractFactory
{
    /**
     * @param $content
     * @return Html\Text
     */
    public function createText($content)
    {
        return new Html\Text($content);
    }

    /**
     * @param $path
     * @param string $name
     * @return Html\Picture
     */
    public function createPicture($path, $name = "")
    {
        return new Html\Picture($path, $name);
    }
}
