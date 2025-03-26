<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UnknownData extends AbstractTagGroup
{
    protected string $id = 'RIFF:UnknownData';

    protected string $name = 'UnknownData';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Unknown Data',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::StreamData
             * line : 231847
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::StreamData.RIFF:UnknownData',
            'desc' => [
                'en' => 'Unknown Data',
            ],
        ],
    ];

    protected int $count = 0;
}
