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
class KodakMake extends AbstractTagGroup
{
    protected string $id = 'Kodak:KodakMake';

    protected string $name = 'KodakMake';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Kodak Make',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Type11
             * line : 109558
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type11.Kodak:KodakMake',
            'desc' => [
                'en' => 'Kodak Make',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
