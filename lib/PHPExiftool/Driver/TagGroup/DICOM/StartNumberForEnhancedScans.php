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
class StartNumberForEnhancedScans extends AbstractTagGroup
{
    protected string $id = 'DICOM:StartNumberForEnhancedScans';

    protected string $name = 'StartNumberForEnhancedScans';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Start Number For Enhanced Scans',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70813
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:StartNumberForEnhancedScans',
            'desc' => [
                'en' => 'Start Number For Enhanced Scans',
            ],
        ],
    ];

    protected int $count = 0;
}
