<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModifiedSharpnessFreq extends AbstractTagGroup
{
    protected string $id = 'Canon:ModifiedSharpnessFreq';

    protected string $name = 'ModifiedSharpnessFreq';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Modified Sharpness Freq',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ModifiedInfo
             * line : 50584
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ModifiedInfo.Canon:ModifiedSharpnessFreq',
            'desc' => [
                'en' => 'Modified Sharpness Freq',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
