<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exifEX;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISOSpeed extends AbstractTagGroup
{
    protected string $id = 'XMP-exifEX:ISOSpeed';

    protected string $name = 'ISOSpeed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO Speed',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exifEX
             * line : 288630
             * type : integer
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::exifEX.XMP-exifEX:ISOSpeed',
            'desc' => [
                'en' => 'ISO Speed',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
