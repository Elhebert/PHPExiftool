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
class AutoBrightness extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:AutoBrightness';

    protected string $name = 'AutoBrightness';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Auto Brightness',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 284765
             * type : boolean
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::crs.XMP-crs:AutoBrightness',
            'desc' => [
                'en' => 'Auto Brightness',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
