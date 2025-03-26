<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GDepth;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageHeight extends AbstractTagGroup
{
    protected string $id = 'XMP-GDepth:ImageHeight';

    protected string $name = 'ImageHeight';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GDepth
             * line : 281130
             * type : real
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::GDepth.XMP-GDepth:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
