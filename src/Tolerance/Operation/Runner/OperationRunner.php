<?php

/*
 * This file is part of the Tolerance package.
 *
 * (c) Samuel ROZE <samuel.roze@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tolerance\Operation\Runner;

use Tolerance\Operation\Exception\UnsupportedOperation;
use Tolerance\Operation\Operation;

interface OperationRunner
{
    /**
     * Run the given operation.
     *
     * @param Operation $operation
     *
     * @throws UnsupportedOperation
     *
     * @return Operation
     */
    public function run(Operation $operation);
}
