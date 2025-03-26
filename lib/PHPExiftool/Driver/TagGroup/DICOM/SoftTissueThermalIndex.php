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
class SoftTissueThermalIndex extends AbstractTagGroup
{
    protected string $id = 'DICOM:SoftTissueThermalIndex';

    protected string $name = 'SoftTissueThermalIndex';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Soft Tissue Thermal Index',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69622
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SoftTissueThermalIndex',
            'desc' => [
                'en' => 'Soft Tissue Thermal Index',
            ],
        ],
    ];

    protected int $count = 0;
}
