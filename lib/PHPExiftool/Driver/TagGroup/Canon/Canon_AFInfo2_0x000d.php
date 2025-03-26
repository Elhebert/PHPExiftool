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
class Canon_AFInfo2_0x000d extends AbstractTagGroup
{
    protected string $id = 'Canon:Canon_AFInfo2_0x000d';

    protected string $name = 'Canon_AFInfo2_0x000d';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::AFInfo2
             * line : 4267
             * type : int16s
             * writable : false
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::AFInfo2.Canon:Canon_AFInfo2_0x000d',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 36;
}
