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
class RASLetterForScoutStartLoc extends AbstractTagGroup
{
    protected string $id = 'DICOM:RASLetterForScoutStartLoc';

    protected string $name = 'RASLetterForScoutStartLoc';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'RAS Letter For Scout Start Loc',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71917
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:RASLetterForScoutStartLoc',
            'desc' => [
                'en' => 'RAS Letter For Scout Start Loc',
            ],
        ],
    ];

    protected int $count = 0;
}
