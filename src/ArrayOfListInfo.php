<?php

/**
 * This file is part of the Mediapart Selligent Client API
 *
 * CC BY-NC-SA <https://github.com/mediapart/selligent>
 *
 * For the full license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mediapart\Selligent;

/**
 *
 */
class ArrayOfListInfo implements \IteratorAggregate
{
    /**
     * @var Array
     */
    protected $ListInfo = [];

    /**
     */
    public function __construct($lists) 
    {
        $this->ListInfo = $lists;
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ListInfo);
    }
}
