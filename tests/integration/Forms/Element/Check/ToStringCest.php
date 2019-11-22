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

namespace Phalcon\Test\Integration\Forms\Element\Check;

use IntegrationTester;
use Phalcon\Forms\Element\Check;
use Phalcon\Tag;
use Phalcon\Test\Fixtures\Traits\DiTrait;

class ToStringCest
{
    use DiTrait;

    public function _before(IntegrationTester $I)
    {
        $this->newDi();
        $this->setDiEscaper();
        $this->setDiUrl();
    }

    /**
     * executed after each test
     */
    public function _after(IntegrationTester $I)
    {
        // Setting the doctype to XHTML5 for other tests to run smoothly
        Tag::setDocType(
            Tag::XHTML5
        );
    }

    /**
     * Tests Phalcon\Forms\Element\Check :: __toString()
     *
     * @author Sid Roberts <https://github.com/SidRoberts>
     * @since  2019-05-23
     */
    public function formsElementCheckToStringSimple(IntegrationTester $I)
    {
        $I->wantToTest('Forms\Element\Check - __toString()');

        $element = new Check('simple');

        $I->assertEquals(
            '<input type="checkbox" id="simple" name="simple" />',
            (string) $element
        );
    }

    /**
     * Tests Phalcon\Forms\Element\Check :: __toString() with parameters
     *
     * @author Sid Roberts <https://github.com/SidRoberts>
     * @since  2019-05-23
     */
    public function formsElementCheckToStringWithParameters(IntegrationTester $I)
    {
        $I->wantToTest('Forms\Element\Check - __toString() with parameters');

        $element = new Check(
            'fantastic',
            [
                'class' => 'fancy',
            ]
        );

        $I->assertEquals(
            '<input type="checkbox" id="fantastic" name="fantastic" class="fancy" />',
            (string) $element
        );
    }
}
