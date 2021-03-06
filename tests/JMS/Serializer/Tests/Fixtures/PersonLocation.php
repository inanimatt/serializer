<?php

namespace JMS\Serializer\Tests\Fixtures;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\Type;

/**
 * @XmlRoot("person_location")
 */
class PersonLocation
{
    /**
     * @Type("JMS\Serializer\Tests\Fixtures\Person")
     */
    public $person;

    /**
     * @Type("string")
     */
    public $location;
}
