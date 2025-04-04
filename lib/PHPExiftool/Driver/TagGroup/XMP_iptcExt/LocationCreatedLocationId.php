<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LocationCreatedLocationId extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:LocationCreatedLocationId';

    protected string $name = 'LocationCreatedLocationId';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Location Created Location Id',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289246
             * type : string
             * writable : true
             * count :
             * flags : bag,flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:LocationCreatedLocationId',
            'desc' => [
                'en' => 'Location Created Location Id',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
