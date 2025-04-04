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
class WBBracketValueAB extends AbstractTagGroup
{
    protected string $id = 'Canon:WBBracketValueAB';

    protected string $name = 'WBBracketValueAB';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB Bracket Value AB',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::FileInfo
             * line : 48373
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FileInfo.Canon:WBBracketValueAB',
            'desc' => [
                'en' => 'WB Bracket Value AB',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
