<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KyoceraRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Make extends AbstractTagGroup
{
    protected string $id = 'KyoceraRaw:Make';

    protected string $name = 'Make';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Make',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : KyoceraRaw::Main
             * line : 109820
             * type : string
             * writable : false
             * count : 7
             * flags : permanent
             */
            'id' => 'KyoceraRaw::Main.KyoceraRaw:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
    ];

    protected int $count = 7;

    protected int $flags = 4;
}
