<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PICT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FramePoly extends AbstractTagGroup
{
    protected string $id = 'PICT:FramePoly';

    protected string $name = 'FramePoly';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 264913
             * type : Polygon
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:FramePoly',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
