<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureIndex extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:ExposureIndex';

    protected string $name = 'ExposureIndex';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Index',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 287909
             * type : rational
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::exif.XMP-exif:ExposureIndex',
            'desc' => [
                'en' => 'Exposure Index',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
