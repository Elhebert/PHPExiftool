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
class ContentCreatorIDCodeSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:ContentCreatorIDCodeSequence';

    protected string $name = 'ContentCreatorIDCodeSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Content Creator ID Code Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 74490
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ContentCreatorIDCodeSequence',
            'desc' => [
                'en' => 'Content Creator ID Code Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
