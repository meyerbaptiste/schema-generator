<?php

/*
 * This file is part of the L'Échoppe package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Echoppe\CoreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Delivery Charge Specification
 * 
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @link http://schema.org/DeliveryChargeSpecification
 * 
 * @ORM\Entity
 */
class DeliveryChargeSpecification extends PriceSpecification
{
}