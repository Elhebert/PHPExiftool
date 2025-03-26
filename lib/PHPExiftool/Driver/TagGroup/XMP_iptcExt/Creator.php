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
class Creator extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:Creator';

    protected string $name = 'Creator';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Creator',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289002
             * type : struct
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:Creator',
            'desc' => [
                'en' => 'Creator',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
