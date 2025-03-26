<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteSampleBits extends AbstractTagGroup
{
    protected string $id = 'CanonRaw:WhiteSampleBits';

    protected string $name = 'WhiteSampleBits';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'White Sample Bits',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonRaw::WhiteSample
             * line : 58489
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'CanonRaw::WhiteSample.CanonRaw:WhiteSampleBits',
            'desc' => [
                'en' => 'White Sample Bits',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
