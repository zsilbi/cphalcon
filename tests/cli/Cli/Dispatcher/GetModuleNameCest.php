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

namespace Phalcon\Test\Cli\Cli\Dispatcher;

use CliTester;

/**
 * Class GetModuleNameCest
 */
class GetModuleNameCest
{
    /**
     * Tests Phalcon\Cli\Dispatcher :: getModuleName()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function cliDispatcherGetModuleName(CliTester $I)
    {
        $I->wantToTest('Cli\Dispatcher - getModuleName()');
        $I->skipTest('Need implementation');
    }
}
