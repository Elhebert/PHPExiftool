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
class FiducialIdentifierCodeSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:FiducialIdentifierCodeSequence';

    protected string $name = 'FiducialIdentifierCodeSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Fiducial Identifier Code Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 74529
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FiducialIdentifierCodeSequence',
            'desc' => [
                'en' => 'Fiducial Identifier Code Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
