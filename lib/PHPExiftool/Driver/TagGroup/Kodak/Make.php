<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Make extends AbstractTagGroup
{
    protected string $id = 'Kodak:Make';

    protected string $name = 'Make';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Make',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::MOV
             * line : 108630
             * type : string
             * writable : false
             * count : 21
             * flags : permanent
             */
            'id' => 'Kodak::MOV.Kodak:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
    ];

    protected int $count = 21;

    protected int $flags = 4;
}
