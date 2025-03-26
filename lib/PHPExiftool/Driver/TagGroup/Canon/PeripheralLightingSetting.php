<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PeripheralLightingSetting extends AbstractTagGroup
{
    protected string $id = 'Canon:PeripheralLightingSetting';

    protected string $name = 'PeripheralLightingSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Peripheral Lighting Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::VignettingCorr2
             * line : 53112
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::VignettingCorr2.Canon:PeripheralLightingSetting',
            'desc' => [
                'en' => 'Peripheral Lighting Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
