<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeSincePowerOn extends AbstractTagGroup
{
    protected string $id = 'Panasonic:TimeSincePowerOn';

    protected string $name = 'TimeSincePowerOn';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Time Since Power On',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Main
             * line : 192255
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:TimeSincePowerOn',
            'desc' => [
                'en' => 'Time Since Power On',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
