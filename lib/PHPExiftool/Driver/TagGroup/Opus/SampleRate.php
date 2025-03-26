<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Opus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SampleRate extends AbstractTagGroup
{
    protected string $id = 'Opus:SampleRate';

    protected string $name = 'SampleRate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Opus::Header
             * line : 263745
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Opus::Header.Opus:SampleRate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
