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
class ReferencedVOILUTBoxSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:ReferencedVOILUTBoxSequence';

    protected string $name = 'ReferencedVOILUTBoxSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Referenced VOILUT Box Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75291
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ReferencedVOILUTBoxSequence',
            'desc' => [
                'en' => 'Referenced VOILUT Box Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
