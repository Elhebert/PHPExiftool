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
class PostCropVignetteStyle extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:PostCropVignetteStyle';

    protected string $name = 'PostCropVignetteStyle';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Post Crop Vignette Style',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 284090
             * type : integer
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:PostCropVignetteStyle',
            'desc' => [
                'en' => 'Post Crop Vignette Style',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
