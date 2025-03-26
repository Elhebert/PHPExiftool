<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class YResolution extends AbstractTagGroup
{
    protected string $id = 'QuickTime:YResolution';

    protected string $name = 'YResolution';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ImageDesc
             * line : 313957
             * type : fixed32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::ImageDesc.QuickTime:YResolution',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
