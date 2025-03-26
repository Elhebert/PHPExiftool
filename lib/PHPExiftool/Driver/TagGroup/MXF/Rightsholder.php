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
class Rightsholder extends AbstractTagGroup
{
    protected string $id = 'MXF:Rightsholder';

    protected string $name = 'Rightsholder';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Rightsholder',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114072
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:Rightsholder',
            'desc' => [
                'en' => 'Rightsholder',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116262
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:Rightsholder',
            'desc' => [
                'en' => 'Rightsholder',
            ],
        ],
    ];

    protected int $count = 0;
}
