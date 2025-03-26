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
class StartTiltAngle extends AbstractTagGroup
{
    protected string $id = 'File:StartTiltAngle';

    protected string $name = 'StartTiltAngle';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Start Tilt Angle',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MRC::FEI12
             * line : 113508
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MRC::FEI12.File:StartTiltAngle',
            'desc' => [
                'en' => 'Start Tilt Angle',
            ],
        ],
    ];

    protected int $count = 0;
}
