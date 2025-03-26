<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteSampleTopBorder extends AbstractTagGroup
{
    protected string $id = 'CanonRaw:WhiteSampleTopBorder';

    protected string $name = 'WhiteSampleTopBorder';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'White Sample Top Border',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonRaw::WhiteSample
             * line : 58486
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'CanonRaw::WhiteSample.CanonRaw:WhiteSampleTopBorder',
            'desc' => [
                'en' => 'White Sample Top Border',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
