<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_pur;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageSizeRestriction extends AbstractTagGroup
{
    protected string $id = 'XMP-pur:ImageSizeRestriction';

    protected string $name = 'ImageSizeRestriction';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Size Restriction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::pur
             * line : 290482
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::pur.XMP-pur:ImageSizeRestriction',
            'desc' => [
                'en' => 'Image Size Restriction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
