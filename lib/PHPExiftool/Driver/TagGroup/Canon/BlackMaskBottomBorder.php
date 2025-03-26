<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlackMaskBottomBorder extends AbstractTagGroup
{
    protected string $id = 'Canon:BlackMaskBottomBorder';

    protected string $name = 'BlackMaskBottomBorder';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Black Mask Bottom Border',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::SensorInfo
             * line : 52625
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::SensorInfo.Canon:BlackMaskBottomBorder',
            'desc' => [
                'en' => 'Black Mask Bottom Border',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
