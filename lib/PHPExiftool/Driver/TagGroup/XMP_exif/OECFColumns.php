<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OECFColumns extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:OECFColumns';

    protected string $name = 'OECFColumns';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'OECF Columns',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 288377
             * type : integer
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::exif.XMP-exif:OECFColumns',
            'desc' => [
                'en' => 'OECF Columns',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
