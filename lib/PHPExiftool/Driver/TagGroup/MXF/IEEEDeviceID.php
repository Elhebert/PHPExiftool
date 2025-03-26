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
class IEEEDeviceID extends AbstractTagGroup
{
    protected string $id = 'MXF:IEEEDeviceID';

    protected string $name = 'IEEEDeviceID';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'IEEE Device ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115262
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:IEEEDeviceID',
            'desc' => [
                'en' => 'IEEE Device ID',
            ],
        ],
    ];

    protected int $count = 0;
}
