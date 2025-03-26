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
class IncludeNonDICOMObjects extends AbstractTagGroup
{
    protected string $id = 'DICOM:IncludeNonDICOMObjects';

    protected string $name = 'IncludeNonDICOMObjects';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Include Non DICOM Objects',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75444
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:IncludeNonDICOMObjects',
            'desc' => [
                'en' => 'Include Non DICOM Objects',
            ],
        ],
    ];

    protected int $count = 0;
}
