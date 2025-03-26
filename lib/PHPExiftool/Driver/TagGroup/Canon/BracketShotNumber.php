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
class BracketShotNumber extends AbstractTagGroup
{
    protected string $id = 'Canon:BracketShotNumber';

    protected string $name = 'BracketShotNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Bracket Shot Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::FileInfo
             * line : 48245
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FileInfo.Canon:BracketShotNumber',
            'desc' => [
                'en' => 'Bracket Shot Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
