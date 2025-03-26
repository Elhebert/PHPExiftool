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
class StreamSampleCount extends AbstractTagGroup
{
    protected string $id = 'RIFF:StreamSampleCount';

    protected string $name = 'StreamSampleCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::StreamHeader
             * line : 328821
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::StreamHeader.RIFF:StreamSampleCount',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
