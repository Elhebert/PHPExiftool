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
class IPTCLastEdited extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:IPTCLastEdited';

    protected string $name = 'IPTCLastEdited';

    protected ?string $phpType = 'date';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'IPTC Last Edited',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289207
             * type : date
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:IPTCLastEdited',
            'desc' => [
                'en' => 'IPTC Last Edited',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
