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

namespace Phalcon\Test\Integration\Mvc\Model\Query;

use IntegrationTester;

/**
 * Class SetSharedLockCest
 */
class SetSharedLockCest
{
    /**
     * Tests Phalcon\Mvc\Model\Query :: setSharedLock()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcModelQuerySetSharedLock(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model\Query - setSharedLock()');
        $I->skipTest('Need implementation');
    }
}
