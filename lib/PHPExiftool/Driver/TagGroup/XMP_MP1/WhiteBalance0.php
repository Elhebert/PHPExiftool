<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_MP1;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalance0 extends AbstractTagGroup
{
    protected string $id = 'XMP-MP1:WhiteBalance0';

    protected string $name = 'WhiteBalance0';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance 0',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::MP1
             * line : 119998
             * type : real
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Microsoft::MP1.XMP-MP1:WhiteBalance0',
            'desc' => [
                'en' => 'White Balance 0',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
