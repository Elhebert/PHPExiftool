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
class Unsharp3Color extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:Unsharp3Color';

    protected string $name = 'Unsharp3Color';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Unsharp 3 Color',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::UnsharpData
             * line : 142140
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::UnsharpData.NikonCapture:Unsharp3Color',
            'desc' => [
                'en' => 'Unsharp 3 Color',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
