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
class MakerNoteSony extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteSony';

    protected string $name = 'MakerNoteSony';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Sony',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77975
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteSony',
            'desc' => [
                'en' => 'Maker Note Sony',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83268
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteSony',
            'desc' => [
                'en' => 'Maker Note Sony',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
