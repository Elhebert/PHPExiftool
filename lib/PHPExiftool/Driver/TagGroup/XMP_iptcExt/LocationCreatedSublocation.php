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
class LocationCreatedSublocation extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:LocationCreatedSublocation';

    protected string $name = 'LocationCreatedSublocation';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Location Created Sublocation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289255
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:LocationCreatedSublocation',
            'desc' => [
                'en' => 'Location Created Sublocation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
