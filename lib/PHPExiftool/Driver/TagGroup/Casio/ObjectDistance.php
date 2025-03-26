<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ObjectDistance extends AbstractTagGroup
{
    protected string $id = 'Casio:ObjectDistance';

    protected string $name = 'ObjectDistance';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Object Distance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Main
             * line : 61708
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:ObjectDistance',
            'desc' => [
                'en' => 'Object Distance',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 62183
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:ObjectDistance',
            'desc' => [
                'en' => 'Object Distance',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
