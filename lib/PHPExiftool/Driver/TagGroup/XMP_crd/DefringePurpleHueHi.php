<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DefringePurpleHueHi extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:DefringePurpleHueHi';

    protected string $name = 'DefringePurpleHueHi';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Defringe Purple Hue Hi',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 282450
             * type : integer
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:DefringePurpleHueHi',
            'desc' => [
                'en' => 'Defringe Purple Hue Hi',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
