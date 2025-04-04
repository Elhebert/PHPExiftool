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
class NumberOfLeafJawPairs extends AbstractTagGroup
{
    protected string $id = 'DICOM:NumberOfLeafJawPairs';

    protected string $name = 'NumberOfLeafJawPairs';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Number Of Leaf Jaw Pairs',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76245
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:NumberOfLeafJawPairs',
            'desc' => [
                'en' => 'Number Of Leaf Jaw Pairs',
            ],
        ],
    ];

    protected int $count = 0;
}
