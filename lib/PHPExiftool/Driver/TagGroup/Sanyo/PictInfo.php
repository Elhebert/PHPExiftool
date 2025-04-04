<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PictInfo extends AbstractTagGroup
{
    protected string $id = 'Sanyo:PictInfo';

    protected string $name = 'PictInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Pict Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sanyo::Main
             * line : 235747
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sanyo::Main.Sanyo:PictInfo',
            'desc' => [
                'en' => 'Pict Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
