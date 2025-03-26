<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\LNK;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FontWeight extends AbstractTagGroup
{
    protected string $id = 'LNK:FontWeight';

    protected string $name = 'FontWeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Font Weight',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : LNK::ConsoleData
             * line : 109940
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'LNK::ConsoleData.LNK:FontWeight',
            'desc' => [
                'en' => 'Font Weight',
            ],
        ],
    ];

    protected int $count = 0;
}
