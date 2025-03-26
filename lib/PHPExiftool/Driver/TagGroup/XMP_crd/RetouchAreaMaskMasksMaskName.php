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
class RetouchAreaMaskMasksMaskName extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:RetouchAreaMaskMasksMaskName';

    protected string $name = 'RetouchAreaMaskMasksMaskName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Area Mask Masks Mask Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 284300
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:RetouchAreaMaskMasksMaskName',
            'desc' => [
                'en' => 'Retouch Area Mask Masks Mask Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
