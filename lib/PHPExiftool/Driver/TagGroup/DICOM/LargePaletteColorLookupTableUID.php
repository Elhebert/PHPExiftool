<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LargePaletteColorLookupTableUID extends AbstractTagGroup
{
    protected string $id = 'DICOM:LargePaletteColorLookupTableUID';

    protected string $name = 'LargePaletteColorLookupTableUID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Large Palette Color Lookup Table UID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72255
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:LargePaletteColorLookupTableUID',
            'desc' => [
                'en' => 'Large Palette Color Lookup Table UID',
            ],
        ],
    ];

    protected int $count = 0;
}
