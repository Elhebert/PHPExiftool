<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcCore;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreatorWorkTelephone extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcCore:CreatorWorkTelephone';

    protected string $name = 'CreatorWorkTelephone';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Creator Work Telephone',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcCore
             * line : 288858
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::iptcCore.XMP-iptcCore:CreatorWorkTelephone',
            'desc' => [
                'en' => 'Creator Work Telephone',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
