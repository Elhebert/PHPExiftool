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
class FrameRate extends AbstractTagGroup
{
    protected string $id = 'RIFF:FrameRate';

    protected string $name = 'FrameRate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::AVIHeader
             * line : 326918
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::AVIHeader.RIFF:FrameRate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
