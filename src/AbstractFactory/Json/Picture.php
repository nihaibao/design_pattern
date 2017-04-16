<?php
/**
 * Created by PhpStorm.
 * User: ellipsis
 * Date: 2017/4/16
 * Time: 下午3:52
 */

namespace Ellips\Pat\AbstractFactory\Json;

use Ellips\Pat\AbstractFactory\Picture as BasePicture;

/**
 * Class Picture
 * @package Ellips\Pat\AbstractFactory\Json
 */
class Picture extends BasePicture
{
    /**
     * @return string
     */
    public function render()
    {
        return json_encode(['title' => $this->name, 'path' => $this->path]);
    }
}
