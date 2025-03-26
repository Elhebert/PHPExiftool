<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RenderingIntent extends AbstractTagGroup
{
    protected string $id = 'File:RenderingIntent';

    protected string $name = 'RenderingIntent';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Rendering Intent',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : BMP::Main
             * line : 2127
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::Main.File:RenderingIntent',
            'desc' => [
                'en' => 'Rendering Intent',
            ],
        ],
    ];

    protected int $count = 0;
}
