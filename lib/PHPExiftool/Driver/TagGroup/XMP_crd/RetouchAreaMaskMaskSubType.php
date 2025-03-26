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
class RetouchAreaMaskMaskSubType extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:RetouchAreaMaskMaskSubType';

    protected string $name = 'RetouchAreaMaskMaskSubType';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Area Mask Mask Sub Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 284345
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:RetouchAreaMaskMaskSubType',
            'desc' => [
                'en' => 'Retouch Area Mask Mask Sub Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
