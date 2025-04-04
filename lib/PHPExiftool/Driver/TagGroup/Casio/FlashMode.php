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
class FlashMode extends AbstractTagGroup
{
    protected string $id = 'Casio:FlashMode';

    protected string $name = 'FlashMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Main
             * line : 61651
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Main
             * line : 61671
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
