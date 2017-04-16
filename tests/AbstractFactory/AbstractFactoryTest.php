<?php
/**
 * Created by PhpStorm.
 * User: ellipsis
 * Date: 2017/4/16
 * Time: 下午4:04
 */

namespace Ellips\Pat\Test\AbstractFactory;

use Ellips\Pat\AbstractFactory\HtmlFactory;
use Ellips\Pat\AbstractFactory\JsonFactory;
use Ellips\Pat\AbstractFactory\AbstractFactory;

/**
 * Class AbstractFactoryTest
 * @package Ellips\Pat
 */
class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function getFactories()
    {
        return [
            [new JsonFactory()],
            [new HtmlFactory()],
        ];
    }

    /**
     * @dataProvider getFactories
     * @param AbstractFactory $factory
     */
    public function testComponentCreation(AbstractFactory $factory)
    {
        $article = [
            $factory->createText('Hello world'),
            $factory->createPicture('/image.jpg', 'hello'),
            $factory->createText('HelloWorld.com'),
        ];

        $this->assertContainsOnly('Ellips\Pat\AbstractFactory\MediaInterface', $article);
    }
}
