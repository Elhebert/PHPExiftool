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
class VersionOfTheHdrStruct extends AbstractTagGroup
{
    protected string $id = 'DICOM:VersionOfTheHdrStruct';

    protected string $name = 'VersionOfTheHdrStruct';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Version Of The Hdr Struct',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72507
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:VersionOfTheHdrStruct',
            'desc' => [
                'en' => 'Version Of The Hdr Struct',
            ],
        ],
    ];

    protected int $count = 0;
}
