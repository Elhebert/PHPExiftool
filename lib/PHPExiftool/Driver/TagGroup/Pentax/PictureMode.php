<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PictureMode extends AbstractTagGroup
{
    protected string $id = 'Pentax:PictureMode';

    protected string $name = 'PictureMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Picture Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 206559
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:PictureMode',
            'desc' => [
                'en' => 'Picture Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::Main
             * line : 208490
             * type : int8u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:PictureMode',
            'desc' => [
                'en' => 'Picture Mode',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
