<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_tiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Compression extends AbstractTagGroup
{
    protected string $id = 'XMP-tiff:Compression';

    protected string $name = 'Compression';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Compression',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::tiff
             * line : 290536
             * type : integer
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::tiff.XMP-tiff:Compression',
            'desc' => [
                'en' => 'Compression',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
