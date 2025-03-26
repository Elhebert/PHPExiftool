<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensMake extends AbstractTagGroup
{
    protected string $id = 'Nikon:LensMake';

    protected string $name = 'LensMake';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Lens Make',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137037
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:LensMake',
            'desc' => [
                'en' => 'Lens Make',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
