<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Priority extends AbstractTagGroup
{
    protected string $id = 'MNG:Priority';

    protected string $name = 'Priority';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::FramePriority
             * line : 164857
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::FramePriority.MNG:Priority',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
