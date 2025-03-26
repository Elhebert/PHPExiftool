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
class Unsharp4Intensity extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:Unsharp4Intensity';

    protected string $name = 'Unsharp4Intensity';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Unsharp 4 Intensity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::UnsharpData
             * line : 142201
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::UnsharpData.NikonCapture:Unsharp4Intensity',
            'desc' => [
                'en' => 'Unsharp 4 Intensity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
