<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ObjectHorizontalAverageDimension extends AbstractTagGroup
{
    protected string $id = 'MXF:ObjectHorizontalAverageDimension';

    protected string $name = 'ObjectHorizontalAverageDimension';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Object Horizontal Average Dimension',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116514
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ObjectHorizontalAverageDimension',
            'desc' => [
                'en' => 'Object Horizontal Average Dimension',
            ],
        ],
    ];

    protected int $count = 0;
}
