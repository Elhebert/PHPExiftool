<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AutoTone extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:AutoTone';

    protected string $name = 'AutoTone';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Auto Tone',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 284780
             * type : boolean
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::crs.XMP-crs:AutoTone',
            'desc' => [
                'en' => 'Auto Tone',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
