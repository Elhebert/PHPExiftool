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
class PostCropVignetteRoundness extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:PostCropVignetteRoundness';

    protected string $name = 'PostCropVignetteRoundness';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Post Crop Vignette Roundness',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287036
             * type : integer
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::crs.XMP-crs:PostCropVignetteRoundness',
            'desc' => [
                'en' => 'Post Crop Vignette Roundness',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
