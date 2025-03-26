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
class TemporalCoverageTo extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:TemporalCoverageTo';

    protected string $name = 'TemporalCoverageTo';

    protected ?string $phpType = 'date';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 409842
             * type : date
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:TemporalCoverageTo',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
