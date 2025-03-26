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
class Interlace extends AbstractTagGroup
{
    protected string $id = 'MNG:Interlace';

    protected string $name = 'Interlace';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Interlace',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::BasisObject
             * line : 111865
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::BasisObject.MNG:Interlace',
            'desc' => [
                'en' => 'Interlace',
            ],
        ],
        1 => [
            /**
             * table_name : MNG::JNGHeader
             * line : 112100
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::JNGHeader.MNG:Interlace',
            'desc' => [
                'en' => 'Interlace',
            ],
        ],
    ];

    protected int $count = 0;
}
