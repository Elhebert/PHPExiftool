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
class FlashGuideNumber extends AbstractTagGroup
{
    protected string $id = 'CanonRaw:FlashGuideNumber';

    protected string $name = 'FlashGuideNumber';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonRaw::FlashInfo
             * line : 78515
             * type : float
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonRaw::FlashInfo.CanonRaw:FlashGuideNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
