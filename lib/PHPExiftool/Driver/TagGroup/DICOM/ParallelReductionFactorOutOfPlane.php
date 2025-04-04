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
class ParallelReductionFactorOutOfPlane extends AbstractTagGroup
{
    protected string $id = 'DICOM:ParallelReductionFactorOutOfPlane';

    protected string $name = 'ParallelReductionFactorOutOfPlane';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Parallel Reduction Factor Out Of Plane',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70210
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ParallelReductionFactorOutOfPlane',
            'desc' => [
                'en' => 'Parallel Reduction Factor Out Of Plane',
            ],
        ],
    ];

    protected int $count = 0;
}
