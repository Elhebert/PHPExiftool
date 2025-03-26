<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LuminanceConsts extends AbstractTagGroup
{
    protected string $id = 'Leaf:LuminanceConsts';

    protected string $name = 'LuminanceConsts';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::CaptureProfile
             * line : 161720
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::CaptureProfile.Leaf:LuminanceConsts',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
