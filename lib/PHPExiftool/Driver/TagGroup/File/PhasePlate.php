<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PhasePlate extends AbstractTagGroup
{
    protected string $id = 'File:PhasePlate';

    protected string $name = 'PhasePlate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Phase Plate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MRC::FEI12
             * line : 113391
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MRC::FEI12.File:PhasePlate',
            'desc' => [
                'en' => 'Phase Plate',
            ],
        ],
    ];

    protected int $count = 0;
}
