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

namespace Phalcon\Test\Integration\Db\Dialect\Sqlite;

use IntegrationTester;

class DescribeIndexesCest
{
    /**
     * Tests Phalcon\Db\Dialect\Sqlite :: describeIndexes()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function dbDialectSqliteDescribeIndexes(IntegrationTester $I)
    {
        $I->wantToTest('Db\Dialect\Sqlite - describeIndexes()');
        $I->skipTest('Need implementation');
    }
}
