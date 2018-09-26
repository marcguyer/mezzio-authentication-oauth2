<?php
/**
 * @see       https://github.com/zendframework/zend-expressive-authentication-oauth2 for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-expressive-authentication-oauth2/blob/master/LICENSE.md
 *     New BSD License
 */

declare(strict_types=1);

namespace ZendTest\Expressive\Authentication\OAuth2\Entity;

use League\OAuth2\Server\Entities\UserEntityInterface;
use PHPUnit\Framework\TestCase;
use Zend\Expressive\Authentication\OAuth2\Entity\UserEntity;

class UserEntityTest extends TestCase
{
    public function setUp()
    {
        $this->entity = new UserEntity('foo');
    }

    /**
     * @expectedException ArgumentCountError
     */
    public function testConstructorWithoutParamWillResultInAnException()
    {
        $entity = new UserEntity();
    }

    public function testImplementsUserEntityInterface()
    {
        $this->assertInstanceOf(UserEntityInterface::class, $this->entity);
    }

    public function testGetIdentifier()
    {
        $this->assertEquals('foo', $this->entity->getIdentifier());
    }
}
