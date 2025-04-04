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
class BitmapOfPrescanOptions extends AbstractTagGroup
{
    protected string $id = 'DICOM:BitmapOfPrescanOptions';

    protected string $name = 'BitmapOfPrescanOptions';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Bitmap Of Prescan Options',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73461
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:BitmapOfPrescanOptions',
            'desc' => [
                'en' => 'Bitmap Of Prescan Options',
            ],
        ],
    ];

    protected int $count = 0;
}
