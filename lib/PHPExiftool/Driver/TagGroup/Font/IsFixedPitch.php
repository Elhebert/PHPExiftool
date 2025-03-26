<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Font;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IsFixedPitch extends AbstractTagGroup
{
    protected string $id = 'Font:IsFixedPitch';

    protected string $name = 'IsFixedPitch';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::PSInfo
             * line : 128173
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PSInfo.Font:IsFixedPitch',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
