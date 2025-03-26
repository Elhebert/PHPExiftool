<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_swf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Type extends AbstractTagGroup
{
    protected string $id = 'XMP-swf:Type';

    protected string $name = 'Type';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::swf
             * line : 290523
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::swf.XMP-swf:Type',
            'desc' => [
                'en' => 'Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
