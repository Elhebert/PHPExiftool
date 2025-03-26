<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageStabilization extends AbstractTagGroup
{
    protected string $id = 'Sony:ImageStabilization';

    protected string $name = 'ImageStabilization';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Stabilization',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::ExtraInfo2
             * line : 246041
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo2.Sony:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::ExtraInfo3
             * line : 246071
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo3.Sony:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Main
             * line : 248901
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
