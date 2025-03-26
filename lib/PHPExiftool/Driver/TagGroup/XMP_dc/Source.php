<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Source extends AbstractTagGroup
{
    protected string $id = 'XMP-dc:Source';

    protected string $name = 'Source';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Source',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::dc
             * line : 287698
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::dc.XMP-dc:Source',
            'desc' => [
                'en' => 'Source',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
