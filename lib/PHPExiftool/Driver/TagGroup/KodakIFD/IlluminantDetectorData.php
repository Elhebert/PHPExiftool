<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IlluminantDetectorData extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:IlluminantDetectorData';

    protected string $name = 'IlluminantDetectorData';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Illuminant Detector Data',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106187
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent,unknown
             */
            'id' => 'Kodak::IFD.KodakIFD:IlluminantDetectorData',
            'desc' => [
                'en' => 'Illuminant Detector Data',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 38;
}
