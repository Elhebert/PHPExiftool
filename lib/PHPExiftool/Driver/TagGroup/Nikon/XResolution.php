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
class XResolution extends AbstractTagGroup
{
    protected string $id = 'Nikon:XResolution';

    protected string $name = 'XResolution';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'X Resolution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AVITags
             * line : 129979
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AVITags.Nikon:XResolution',
            'desc' => [
                'en' => 'X Resolution',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
