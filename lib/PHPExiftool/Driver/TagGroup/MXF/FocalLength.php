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
class FocalLength extends AbstractTagGroup
{
    protected string $id = 'MXF:FocalLength';

    protected string $name = 'FocalLength';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115660
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116586
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
    ];

    protected int $count = 0;
}
