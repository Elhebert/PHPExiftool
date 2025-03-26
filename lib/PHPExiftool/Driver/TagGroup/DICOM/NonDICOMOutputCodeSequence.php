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
class NonDICOMOutputCodeSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:NonDICOMOutputCodeSequence';

    protected string $name = 'NonDICOMOutputCodeSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Non DICOM Output Code Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73200
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:NonDICOMOutputCodeSequence',
            'desc' => [
                'en' => 'Non DICOM Output Code Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
