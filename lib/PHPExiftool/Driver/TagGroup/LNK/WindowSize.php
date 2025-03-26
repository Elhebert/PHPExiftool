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
class WindowSize extends AbstractTagGroup
{
    protected string $id = 'LNK:WindowSize';

    protected string $name = 'WindowSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Window Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : LNK::ConsoleData
             * line : 109908
             * type : int16u
             * writable : false
             * count : 2
             * flags :
             */
            'id' => 'LNK::ConsoleData.LNK:WindowSize',
            'desc' => [
                'en' => 'Window Size',
            ],
        ],
    ];

    protected int $count = 2;
}
