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
class LensProfileMatchKeyExifMake extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:LensProfileMatchKeyExifMake';

    protected string $name = 'LensProfileMatchKeyExifMake';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Profile Match Key Exif Make',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283020
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:LensProfileMatchKeyExifMake',
            'desc' => [
                'en' => 'Lens Profile Match Key Exif Make',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
