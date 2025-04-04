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
class RealWorldValueMappingSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:RealWorldValueMappingSequence';

    protected string $name = 'RealWorldValueMappingSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Real World Value Mapping Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73227
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:RealWorldValueMappingSequence',
            'desc' => [
                'en' => 'Real World Value Mapping Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
