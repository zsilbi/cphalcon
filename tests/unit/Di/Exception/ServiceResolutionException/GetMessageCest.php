<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Di\Exception\ServiceResolutionException;

use UnitTester;

class GetMessageCest
{
    /**
     * Unit Tests Phalcon\Di\Exception\ServiceResolutionException ::
     * getMessage()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2019-06-13
     */
    public function diExceptionServiceResolutionExceptionGetMessage(UnitTester $I)
    {
        $I->wantToTest('Di\Exception\ServiceResolutionException - getMessage()');

        $I->skipTest('Need implementation');
    }
}
