<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensFirmwareVersion extends AbstractTagGroup
{
    protected string $id = 'Sony:LensFirmwareVersion';

    protected string $name = 'LensFirmwareVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 351448
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:LensFirmwareVersion',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag940c
             * line : 391007
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag940c.Sony:LensFirmwareVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
