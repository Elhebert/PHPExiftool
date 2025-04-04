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
class CanonColorInfo2 extends AbstractTagGroup
{
    protected string $id = 'CanonRaw:CanonColorInfo2';

    protected string $name = 'CanonColorInfo2';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Canon Color Info 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonRaw::Main
             * line : 57308
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonRaw::Main.CanonRaw:CanonColorInfo2',
            'desc' => [
                'en' => 'Canon Color Info 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
