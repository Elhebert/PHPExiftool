<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RetouchAreaMaskMaskBlendMode extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:RetouchAreaMaskMaskBlendMode';

    protected string $name = 'RetouchAreaMaskMaskBlendMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Area Mask Mask Blend Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287183
             * type : integer
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:RetouchAreaMaskMaskBlendMode',
            'desc' => [
                'en' => 'Retouch Area Mask Mask Blend Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
