<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFStatusCenterHorizontal extends AbstractTagGroup
{
    protected string $id = 'Minolta:AFStatusCenterHorizontal';

    protected string $name = 'AFStatusCenterHorizontal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Center Horizontal',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraInfoA100
             * line : 121736
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraInfoA100.Minolta:AFStatusCenterHorizontal',
            'desc' => [
                'en' => 'AF Status Center Horizontal',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
