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
class RawJpgHeight extends AbstractTagGroup
{
    protected string $id = 'CanonRaw:RawJpgHeight';

    protected string $name = 'RawJpgHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Jpg Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonRaw::RawJpgInfo
             * line : 58457
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonRaw::RawJpgInfo.CanonRaw:RawJpgHeight',
            'desc' => [
                'en' => 'Raw Jpg Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
