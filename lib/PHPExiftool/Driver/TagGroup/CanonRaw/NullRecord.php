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
class NullRecord extends AbstractTagGroup
{
    protected string $id = 'CanonRaw:NullRecord';

    protected string $name = 'NullRecord';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Null Record',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonRaw::Main
             * line : 57230
             * type : undef
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonRaw::Main.CanonRaw:NullRecord',
            'desc' => [
                'en' => 'Null Record',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
