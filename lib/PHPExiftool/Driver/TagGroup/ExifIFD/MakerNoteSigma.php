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
class MakerNoteSigma extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteSigma';

    protected string $name = 'MakerNoteSigma';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Sigma',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77972
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteSigma',
            'desc' => [
                'en' => 'Maker Note Sigma',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83265
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteSigma',
            'desc' => [
                'en' => 'Maker Note Sigma',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
