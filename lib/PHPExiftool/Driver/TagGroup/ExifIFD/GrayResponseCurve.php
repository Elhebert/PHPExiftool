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
class GrayResponseCurve extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:GrayResponseCurve';

    protected string $name = 'GrayResponseCurve';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Gray Response Curve',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81584
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:GrayResponseCurve',
            'desc' => [
                'en' => 'Gray Response Curve',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
