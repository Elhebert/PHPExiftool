<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShutterType extends AbstractTagGroup
{
    protected string $id = 'Panasonic:ShutterType';

    protected string $name = 'ShutterType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Shutter Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Main
             * line : 193187
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:ShutterType',
            'desc' => [
                'en' => 'Shutter Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
