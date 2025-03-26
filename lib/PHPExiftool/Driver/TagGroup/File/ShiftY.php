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
class ShiftY extends AbstractTagGroup
{
    protected string $id = 'File:ShiftY';

    protected string $name = 'ShiftY';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Shift Y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MRC::FEI12
             * line : 113325
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MRC::FEI12.File:ShiftY',
            'desc' => [
                'en' => 'Shift Y',
            ],
        ],
    ];

    protected int $count = 0;
}
