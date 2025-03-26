<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CaptureFrameRate extends AbstractTagGroup
{
    protected string $id = 'Casio:CaptureFrameRate';

    protected string $name = 'CaptureFrameRate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Capture Frame Rate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Type2
             * line : 65033
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:CaptureFrameRate',
            'desc' => [
                'en' => 'Capture Frame Rate',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
