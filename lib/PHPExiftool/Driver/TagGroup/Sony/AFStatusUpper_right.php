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
class AFStatusUpper_right extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusUpper-right';

    protected string $name = 'AFStatusUpper-right';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Upper-right',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFStatus15
             * line : 240466
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFStatus15.Sony:AFStatusUpper-right',
            'desc' => [
                'en' => 'AF Status Upper-right',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraInfo
             * line : 242266
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo.Sony:AFStatusUpper-right',
            'desc' => [
                'en' => 'AF Status Upper-right',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
