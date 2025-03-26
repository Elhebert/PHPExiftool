<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalance extends AbstractTagGroup
{
    protected string $id = 'Kodak:WhiteBalance';

    protected string $name = 'WhiteBalance';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Main
             * line : 108773
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Main.Kodak:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 109506
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        2 => [
            /**
             * table_name : Kodak::Type5
             * line : 109651
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type5.Kodak:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
