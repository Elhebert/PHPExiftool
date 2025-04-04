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
class StartTimeSecsInFirstAxial extends AbstractTagGroup
{
    protected string $id = 'DICOM:StartTimeSecsInFirstAxial';

    protected string $name = 'StartTimeSecsInFirstAxial';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Start Time Secs In First Axial',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71788
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:StartTimeSecsInFirstAxial',
            'desc' => [
                'en' => 'Start Time Secs In First Axial',
            ],
        ],
    ];

    protected int $count = 0;
}
