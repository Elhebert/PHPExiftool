<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LinkQuality extends AbstractTagGroup
{
    protected string $id = 'Parrot:LinkQuality';

    protected string $name = 'LinkQuality';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Link Quality',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::V3
             * line : 196190
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V3.Parrot:LinkQuality',
            'desc' => [
                'en' => 'Link Quality',
            ],
        ],
    ];

    protected int $count = 0;
}
