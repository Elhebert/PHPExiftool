<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorWidth extends AbstractTagGroup
{
    protected string $id = 'IFD0:SensorWidth';

    protected string $name = 'SensorWidth';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PanasonicRaw::Main
             * line : 280217
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PanasonicRaw::Main.IFD0:SensorWidth',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
