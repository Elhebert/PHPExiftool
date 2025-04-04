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
class MeasureType extends AbstractTagGroup
{
    protected string $id = 'XMP-GDepth:MeasureType';

    protected string $name = 'MeasureType';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Measure Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GDepth
             * line : 281139
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::GDepth.XMP-GDepth:MeasureType',
            'desc' => [
                'en' => 'Measure Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
