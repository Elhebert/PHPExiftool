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
class PlatformSerialNumber extends AbstractTagGroup
{
    protected string $id = 'MXF:PlatformSerialNumber';

    protected string $name = 'PlatformSerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Platform Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116127
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:PlatformSerialNumber',
            'desc' => [
                'en' => 'Platform Serial Number',
            ],
        ],
    ];

    protected int $count = 0;
}
