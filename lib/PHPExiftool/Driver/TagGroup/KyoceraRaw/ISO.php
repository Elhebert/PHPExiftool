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
class ISO extends AbstractTagGroup
{
    protected string $id = 'KyoceraRaw:ISO';

    protected string $name = 'ISO';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : KyoceraRaw::Main
             * line : 109826
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'KyoceraRaw::Main.KyoceraRaw:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
