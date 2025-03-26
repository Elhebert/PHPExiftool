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
class FlashExposureComp extends AbstractTagGroup
{
    protected string $id = 'Pentax:FlashExposureComp';

    protected string $name = 'FlashExposureComp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Exposure Comp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 208912
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:FlashExposureComp',
            'desc' => [
                'en' => 'Flash Exposure Comp',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::Main
             * line : 208915
             * type : int8s
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:FlashExposureComp',
            'desc' => [
                'en' => 'Flash Exposure Comp',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
