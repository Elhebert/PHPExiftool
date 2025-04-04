<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PowerSource extends AbstractTagGroup
{
    protected string $id = 'Pentax:PowerSource';

    protected string $name = 'PowerSource';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Power Source',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::BatteryInfo
             * line : 196837
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::BatteryInfo.Pentax:PowerSource',
            'desc' => [
                'en' => 'Power Source',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
