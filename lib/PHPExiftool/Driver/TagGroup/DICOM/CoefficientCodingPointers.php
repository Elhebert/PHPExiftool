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
class CoefficientCodingPointers extends AbstractTagGroup
{
    protected string $id = 'DICOM:CoefficientCodingPointers';

    protected string $name = 'CoefficientCodingPointers';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Coefficient Coding Pointers',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72126
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:CoefficientCodingPointers',
            'desc' => [
                'en' => 'Coefficient Coding Pointers',
            ],
        ],
    ];

    protected int $count = 0;
}
