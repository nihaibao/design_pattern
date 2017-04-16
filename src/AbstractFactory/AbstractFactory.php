<?php
/**
 * Created by PhpStorm.
 * User: ellipsis
 * Date: 2017/4/16
 * Time: 下午3:40
 */

namespace Ellips\Pat\AbstractFactory;

abstract class AbstractFactory
{
    /**
     * @param $content
     * @return mixed
     */
    abstract public function createText($content);

    /**
     * @param $path
     * @param string $name
     * @return mixed
     */
    abstract public function createPicture($path, $name = "");
}
