<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ducky;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Quality extends AbstractTagGroup
{
    protected string $id = 'Ducky:Quality';

    protected string $name = 'Quality';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Quality',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : APP12::Ducky
             * line : 203
             * type : int32u
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'APP12::Ducky.Ducky:Quality',
            'desc' => [
                'en' => 'Quality',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
