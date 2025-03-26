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
class AFMicroAdjRegisteredLenses extends AbstractTagGroup
{
    protected string $id = 'Sony:AFMicroAdjRegisteredLenses';

    protected string $name = 'AFMicroAdjRegisteredLenses';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraInfo
             * line : 345561
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo.Sony:AFMicroAdjRegisteredLenses',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
