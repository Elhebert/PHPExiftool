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
class RelatedImageFileFormat extends AbstractTagGroup
{
    protected string $id = 'InteropIFD:RelatedImageFileFormat';

    protected string $name = 'RelatedImageFileFormat';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Related Image File Format',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82111
             * type : string
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.InteropIFD:RelatedImageFileFormat',
            'desc' => [
                'en' => 'Related Image File Format',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
