<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSFramingAltitude extends AbstractTagGroup
{
    protected string $id = 'Parrot:GPSFramingAltitude';

    protected string $name = 'GPSFramingAltitude';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::Automation
             * line : 281855
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::Automation.Parrot:GPSFramingAltitude',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
