<?php
/**
 * Created by PhpStorm.
 * User: ellipsis
 * Date: 2017/4/16
 * Time: 下午3:48
 */

namespace Ellips\Pat\AbstractFactory;

abstract class Picture implements MediaInterface
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $name;

    /**
     * Picture constructor.
     * @param $path
     * @param string $name
     */
    public function __construct($path, $name = "")
    {
        $this->path = (string)$path;
        $this->name = (string)$name;
    }
}
