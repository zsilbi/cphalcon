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

namespace Phalcon\Test\Integration\Mvc\Model\Resultset\Complex;

use IntegrationTester;

/**
 * Class IsFreshCest
 */
class IsFreshCest
{
    /**
     * Tests Phalcon\Mvc\Model\Resultset\Complex :: isFresh()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcModelResultsetComplexIsFresh(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model\Resultset\Complex - isFresh()');
        $I->skipTest('Need implementation');
    }
}
