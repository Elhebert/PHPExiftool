<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShutterSpeedRange extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:ShutterSpeedRange';

    protected string $name = 'ShutterSpeedRange';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Shutter Speed Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54000
             * type : int32s
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:ShutterSpeedRange',
            'desc' => [
                'en' => 'Shutter Speed Range',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54011
             * type : int32s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:ShutterSpeedRange',
            'desc' => [
                'en' => 'Shutter Speed Range',
            ],
        ],
    ];

    protected int $flags = 2052;
}
