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
class CollimatorUpperHorizontalEdge extends AbstractTagGroup
{
    protected string $id = 'DICOM:CollimatorUpperHorizontalEdge';

    protected string $name = 'CollimatorUpperHorizontalEdge';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Collimator Upper Horizontal Edge',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69523
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:CollimatorUpperHorizontalEdge',
            'desc' => [
                'en' => 'Collimator Upper Horizontal Edge',
            ],
        ],
    ];

    protected int $count = 0;
}
