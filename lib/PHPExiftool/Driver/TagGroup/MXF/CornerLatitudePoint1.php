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
class CornerLatitudePoint1 extends AbstractTagGroup
{
    protected string $id = 'MXF:CornerLatitudePoint1';

    protected string $name = 'CornerLatitudePoint1';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Corner Latitude Point 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116643
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:CornerLatitudePoint1',
            'desc' => [
                'en' => 'Corner Latitude Point 1',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116646
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:CornerLatitudePoint1',
            'desc' => [
                'en' => 'Corner Latitude Point 1',
            ],
        ],
    ];

    protected int $count = 0;
}
