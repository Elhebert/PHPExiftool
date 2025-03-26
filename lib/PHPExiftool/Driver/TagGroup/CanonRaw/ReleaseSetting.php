<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ReleaseSetting extends AbstractTagGroup
{
    protected string $id = 'CanonRaw:ReleaseSetting';

    protected string $name = 'ReleaseSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonRaw::Main
             * line : 78755
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonRaw::Main.CanonRaw:ReleaseSetting',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
