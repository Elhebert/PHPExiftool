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
class DigitalZoomRatio extends AbstractTagGroup
{
    protected string $id = 'Sony:DigitalZoomRatio';

    protected string $name = 'DigitalZoomRatio';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Digital Zoom Ratio',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253392
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:DigitalZoomRatio',
            'desc' => [
                'en' => 'Digital Zoom Ratio',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254708
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:DigitalZoomRatio',
            'desc' => [
                'en' => 'Digital Zoom Ratio',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
