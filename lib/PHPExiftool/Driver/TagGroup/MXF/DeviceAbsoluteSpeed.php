<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DeviceAbsoluteSpeed extends AbstractTagGroup
{
    protected string $id = 'MXF:DeviceAbsoluteSpeed';

    protected string $name = 'DeviceAbsoluteSpeed';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Device Absolute Speed',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114839
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:DeviceAbsoluteSpeed',
            'desc' => [
                'en' => 'Device Absolute Speed',
            ],
        ],
    ];

    protected int $count = 0;
}
