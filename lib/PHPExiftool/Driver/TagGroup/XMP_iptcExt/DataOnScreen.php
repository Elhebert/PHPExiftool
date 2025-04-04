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
class DataOnScreen extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:DataOnScreen';

    protected string $name = 'DataOnScreen';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Data On Screen',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289017
             * type : struct
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:DataOnScreen',
            'desc' => [
                'en' => 'Data On Screen',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
