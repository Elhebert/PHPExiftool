<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JVC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Quality extends AbstractTagGroup
{
    protected string $id = 'JVC:Quality';

    protected string $name = 'Quality';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Quality',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JVC::Main
             * line : 105424
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'JVC::Main.JVC:Quality',
            'desc' => [
                'en' => 'Quality',
            ],
        ],
        1 => [
            /**
             * table_name : JVC::Text
             * line : 105442
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'JVC::Text.JVC:Quality',
            'desc' => [
                'en' => 'Quality',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
