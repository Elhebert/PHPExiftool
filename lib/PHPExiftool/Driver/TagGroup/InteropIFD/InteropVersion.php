<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\InteropIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InteropVersion extends AbstractTagGroup
{
    protected string $id = 'InteropIFD:InteropVersion';

    protected string $name = 'InteropVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Interoperability Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81134
             * type : undef
             * writable : true
             * count :
             * flags : mandatory,unsafe
             */
            'id' => 'Exif::Main.InteropIFD:InteropVersion',
            'desc' => [
                'en' => 'Interoperability Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2192;
}
