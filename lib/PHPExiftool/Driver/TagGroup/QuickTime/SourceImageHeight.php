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
class SourceImageHeight extends AbstractTagGroup
{
    protected string $id = 'QuickTime:SourceImageHeight';

    protected string $name = 'SourceImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Source Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ImageDesc
             * line : 219643
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::ImageDesc.QuickTime:SourceImageHeight',
            'desc' => [
                'en' => 'Source Image Height',
            ],
        ],
    ];

    protected int $count = 0;
}
