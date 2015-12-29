<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

/**
 * @method $this extends($class)
 * @method $this implements($interface)
 */
class phpClass
{
    use asserters;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isabstract
     */
    public $isAbstract;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isfinal
     */
    public $isFinal;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasnoparent
     */
    public $hasNoParent;

    /**
     * @param string $parent
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasparent
     *
     * @return $this
     */
    public function hasParent($parent, $failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link * @link http://docs.atoum.org/en/latest/asserters.html#hasnoparent
     *
     * @return $this
     */
    public function hasNoParent($failMessage = null) {}

    /**
     * @param string $parent
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issubclassof
     *
     * @return $this
     */
    public function isSubClassOf($parent, $failMessage = null) {}

    /**
     * @param string $interface
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasinterface
     *
     * @return $this
     */
    public function hasInterface($interface, $failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isabstract
     *
     * @return $this
     */
    public function isAbstract($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isfinal
     *
     * @return $this
     */
    public function isFinal($failMessage = null) {}

    /**
     * @param string $method
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasmethod
     *
     * @return $this
     */
    public function hasMethod($method, $failMessage = null) {}

    /**
     * @param string $constant
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasconstant
     *
     * @return $this
     */
    public function hasConstant($constant, $failMessage = null) {}
}
