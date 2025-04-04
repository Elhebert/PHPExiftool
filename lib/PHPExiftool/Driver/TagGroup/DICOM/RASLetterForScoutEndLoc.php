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
class RASLetterForScoutEndLoc extends AbstractTagGroup
{
    protected string $id = 'DICOM:RASLetterForScoutEndLoc';

    protected string $name = 'RASLetterForScoutEndLoc';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'RAS Letter For Scout End Loc',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71920
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:RASLetterForScoutEndLoc',
            'desc' => [
                'en' => 'RAS Letter For Scout End Loc',
            ],
        ],
    ];

    protected int $count = 0;
}
