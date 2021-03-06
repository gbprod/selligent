<?php

/**
 * This file is part of the Mediapart Selligent Client API
 *
 * CC BY-NC-SA <https://github.com/mediapart/selligent>
 *
 * For the full license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mediapart\Selligent\Tests\Response;

use PHPUnit\Framework\TestCase;
use Mediapart\Selligent\Response;
use Mediapart\Selligent\Response\CountUsersByConstraintResponse;

/**
 *
 */
class CountUsersByConstraintResponseTest extends TestCase
{
    /**
     *
     */
    public function testResponse()
    {
        $response = new CountUsersByConstraintResponse();

        $this->assertEquals(0, $response->getUserCount());
        $this->assertEquals(Response::ERROR_FAILED, $response->getCode());
    }
}
