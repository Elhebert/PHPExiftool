<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UnsharpCount extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:UnsharpCount';

    protected string $name = 'UnsharpCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Unsharp Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::UnsharpData
             * line : 142067
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::UnsharpData.NikonCapture:UnsharpCount',
            'desc' => [
                'en' => 'Unsharp Count',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
