<?php
/**
 * Created by PhpStorm.
 * User: ellipsis
 * Date: 2017/4/16
 * Time: 下午3:55
 */

namespace Ellips\Pat\AbstractFactory\Json;

use Ellips\Pat\AbstractFactory\Text as BaseText;

/**
 * Class Text
 * @package Ellips\Pat\AbstractFactory\Json
 */
class Text extends BaseText
{
    /**
     * @return string
     */
    public function render()
    {
        return json_encode(['content' => $this->text]);
    }
}
