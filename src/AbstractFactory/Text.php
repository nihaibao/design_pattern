<?php
/**
 * Created by PhpStorm.
 * User: ellipsis
 * Date: 2017/4/16
 * Time: 下午3:50
 */

namespace Ellips\Pat\AbstractFactory;

abstract class Text implements MediaInterface
{
    /**
     * @var string
     */
    protected $text;

    /**
     * Text constructor.
     * @param $text
     */
    public function __construct($text)
    {
        $this->text = (string)$text;
    }
}
