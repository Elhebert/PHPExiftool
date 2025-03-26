<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RenderingIntent extends AbstractTagGroup
{
    protected string $id = 'MIFF:RenderingIntent';

    protected string $name = 'RenderingIntent';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Rendering Intent',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIFF::Main
             * line : 111757
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MIFF::Main.MIFF:RenderingIntent',
            'desc' => [
                'en' => 'Rendering Intent',
            ],
        ],
    ];

    protected int $count = 0;
}
