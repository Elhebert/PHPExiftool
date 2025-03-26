<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AnimationIterations extends AbstractTagGroup
{
    protected string $id = 'GIF:AnimationIterations';

    protected string $name = 'AnimationIterations';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GIF::Animation
             * line : 131236
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GIF::Animation.GIF:AnimationIterations',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
