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
class OverrangeCorrectionUsed extends AbstractTagGroup
{
    protected string $id = 'DICOM:OverrangeCorrectionUsed';

    protected string $name = 'OverrangeCorrectionUsed';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Overrange Correction Used',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71197
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:OverrangeCorrectionUsed',
            'desc' => [
                'en' => 'Overrange Correction Used',
            ],
        ],
    ];

    protected int $count = 0;
}
