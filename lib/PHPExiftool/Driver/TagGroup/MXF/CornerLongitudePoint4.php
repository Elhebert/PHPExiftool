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
class CornerLongitudePoint4 extends AbstractTagGroup
{
    protected string $id = 'MXF:CornerLongitudePoint4';

    protected string $name = 'CornerLongitudePoint4';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 170426
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:CornerLongitudePoint4',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 170429
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:CornerLongitudePoint4',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
