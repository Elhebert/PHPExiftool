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
class EquivalentCDADocumentSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:EquivalentCDADocumentSequence';

    protected string $name = 'EquivalentCDADocumentSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Equivalent CDA Document Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73299
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:EquivalentCDADocumentSequence',
            'desc' => [
                'en' => 'Equivalent CDA Document Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
