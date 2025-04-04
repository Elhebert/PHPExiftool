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
class Headline extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:Headline';

    protected string $name = 'Headline';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Headline',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289125
             * type : lang-alt
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:Headline',
            'desc' => [
                'en' => 'Headline',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
