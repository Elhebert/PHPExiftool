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
class TiffMeteringImage extends AbstractTagGroup
{
    protected string $id = 'Sony:TiffMeteringImage';

    protected string $name = 'TiffMeteringImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 353438
             * type : undef
             * writable : false
             * count : 9600
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:TiffMeteringImage',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MoreInfo
             * line : 359752
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreInfo.Sony:TiffMeteringImage',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag940e
             * line : 391024
             * type : undef
             * writable : false
             * count : 2640
             * flags : permanent
             */
            'id' => 'Sony::Tag940e.Sony:TiffMeteringImage',
            'desc' => [
            ],
        ],
    ];

    protected int $flags = 4;
}
