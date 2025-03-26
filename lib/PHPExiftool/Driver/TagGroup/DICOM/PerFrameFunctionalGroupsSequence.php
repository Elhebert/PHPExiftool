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
class PerFrameFunctionalGroupsSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:PerFrameFunctionalGroupsSequence';

    protected string $name = 'PerFrameFunctionalGroupsSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Per Frame Functional Groups Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 77319
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:PerFrameFunctionalGroupsSequence',
            'desc' => [
                'en' => 'Per Frame Functional Groups Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
