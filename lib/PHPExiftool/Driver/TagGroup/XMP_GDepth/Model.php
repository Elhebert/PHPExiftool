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
class Model extends AbstractTagGroup
{
    protected string $id = 'XMP-GDepth:Model';

    protected string $name = 'Model';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Model',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GDepth
             * line : 281153
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::GDepth.XMP-GDepth:Model',
            'desc' => [
                'en' => 'Model',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
