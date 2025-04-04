<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_drone_dji;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RtkFlag extends AbstractTagGroup
{
    protected string $id = 'XMP-drone-dji:RtkFlag';

    protected string $name = 'RtkFlag';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Rtk Flag',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DJI::XMP
             * line : 77713
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'DJI::XMP.XMP-drone-dji:RtkFlag',
            'desc' => [
                'en' => 'Rtk Flag',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
