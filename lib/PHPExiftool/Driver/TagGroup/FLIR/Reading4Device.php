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
class Reading4Device extends AbstractTagGroup
{
    protected string $id = 'FLIR:Reading4Device';

    protected string $name = 'Reading4Device';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Reading 4 Device',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::MeterLink
             * line : 86274
             * type : string
             * writable : false
             * count : 16
             * flags :
             */
            'id' => 'FLIR::MeterLink.FLIR:Reading4Device',
            'desc' => [
                'en' => 'Reading 4 Device',
            ],
        ],
    ];

    protected int $count = 16;
}
