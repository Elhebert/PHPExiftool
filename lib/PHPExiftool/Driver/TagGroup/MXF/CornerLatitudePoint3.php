<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CornerLatitudePoint3 extends AbstractTagGroup
{
    protected string $id = 'MXF:CornerLatitudePoint3';

    protected string $name = 'CornerLatitudePoint3';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Corner Latitude Point 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116655
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:CornerLatitudePoint3',
            'desc' => [
                'en' => 'Corner Latitude Point 3',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116658
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:CornerLatitudePoint3',
            'desc' => [
                'en' => 'Corner Latitude Point 3',
            ],
        ],
    ];

    protected int $count = 0;
}
