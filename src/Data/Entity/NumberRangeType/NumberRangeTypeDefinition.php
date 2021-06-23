<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\NumberRangeType;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeTypeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'number_range_type';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return NumberRangeTypeEntity::class;
    }

    public function getEntityCollection() : string
    {
        return NumberRangeTypeCollection::class;
    }
}