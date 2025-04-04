<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PostFocusMerging extends AbstractTagGroup
{
    protected string $id = 'Panasonic:PostFocusMerging';

    protected string $name = 'PostFocusMerging';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Post Focus Merging',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Main
             * line : 193411
             * type : int32u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:PostFocusMerging',
            'desc' => [
                'en' => 'Post Focus Merging',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
