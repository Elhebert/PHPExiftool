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
class RetouchAreaMaskMasksCenterValue extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:RetouchAreaMaskMasksCenterValue';

    protected string $name = 'RetouchAreaMaskMasksCenterValue';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Area Mask Masks Center Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 284258
             * type : real
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:RetouchAreaMaskMasksCenterValue',
            'desc' => [
                'en' => 'Retouch Area Mask Masks Center Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
