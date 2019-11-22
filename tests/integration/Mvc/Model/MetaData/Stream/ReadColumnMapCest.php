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

namespace Phalcon\Test\Integration\Mvc\Model\MetaData\Stream;

use IntegrationTester;

/**
 * Class ReadColumnMapCest
 */
class ReadColumnMapCest
{
    /**
     * Tests Phalcon\Mvc\Model\MetaData\Stream :: readColumnMap()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcModelMetadataStreamReadColumnMap(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model\MetaData\Stream - readColumnMap()');
        $I->skipTest('Need implementation');
    }
}
