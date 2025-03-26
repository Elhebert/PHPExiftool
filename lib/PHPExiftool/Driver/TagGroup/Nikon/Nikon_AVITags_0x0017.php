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
class Nikon_AVITags_0x0017 extends AbstractTagGroup
{
    protected string $id = 'Nikon:Nikon_AVITags_0x0017';

    protected string $name = 'Nikon_AVITags_0x0017';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Nikon AVI Tags 0x0017',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AVITags
             * line : 130011
             * type : int16u
             * writable : false
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::AVITags.Nikon:Nikon_AVITags_0x0017',
            'desc' => [
                'en' => 'Nikon AVI Tags 0x0017',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 36;
}
