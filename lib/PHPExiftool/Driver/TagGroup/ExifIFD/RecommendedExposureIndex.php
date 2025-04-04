<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RecommendedExposureIndex extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:RecommendedExposureIndex';

    protected string $name = 'RecommendedExposureIndex';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Recommended Exposure Index',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82633
             * type : int32u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:RecommendedExposureIndex',
            'desc' => [
                'en' => 'Recommended Exposure Index',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
