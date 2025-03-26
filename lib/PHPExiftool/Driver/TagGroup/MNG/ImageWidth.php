<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageWidth extends AbstractTagGroup
{
    protected string $id = 'MNG:ImageWidth';

    protected string $name = 'ImageWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::BasisObject
             * line : 111820
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::BasisObject.MNG:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        1 => [
            /**
             * table_name : MNG::JNGHeader
             * line : 112066
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::JNGHeader.MNG:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        2 => [
            /**
             * table_name : MNG::MNGHeader
             * line : 112190
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::MNGHeader.MNG:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
    ];

    protected int $count = 0;
}
