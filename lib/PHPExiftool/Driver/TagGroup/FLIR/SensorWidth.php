<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorWidth extends AbstractTagGroup
{
    protected string $id = 'FLIR:SensorWidth';

    protected string $name = 'SensorWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::AFF1
             * line : 122131
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::AFF1.FLIR:SensorWidth',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : FLIR::AFF5
             * line : 122157
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::AFF5.FLIR:SensorWidth',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
