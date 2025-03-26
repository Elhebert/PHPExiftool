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
class RetouchAreaMaskRangeLumMax extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:RetouchAreaMaskRangeLumMax';

    protected string $name = 'RetouchAreaMaskRangeLumMax';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Area Mask Range Lum Max',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 284189
             * type : real
             * writable : true
             * count :
             * flags : avoid,flattened,list
             */
            'id' => 'XMP::crd.XMP-crd:RetouchAreaMaskRangeLumMax',
            'desc' => [
                'en' => 'Retouch Area Mask Range Lum Max',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
