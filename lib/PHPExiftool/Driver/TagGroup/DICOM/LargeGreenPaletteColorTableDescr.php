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
class LargeGreenPaletteColorTableDescr extends AbstractTagGroup
{
    protected string $id = 'DICOM:LargeGreenPaletteColorTableDescr';

    protected string $name = 'LargeGreenPaletteColorTableDescr';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Large Green Palette Color Table Descr',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72225
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:LargeGreenPaletteColorTableDescr',
            'desc' => [
                'en' => 'Large Green Palette Color Table Descr',
            ],
        ],
    ];

    protected int $count = 0;
}
