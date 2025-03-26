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
class Unsharp3HaloWidth extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:Unsharp3HaloWidth';

    protected string $name = 'Unsharp3HaloWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Unsharp 3 Halo Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::UnsharpData
             * line : 142169
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::UnsharpData.NikonCapture:Unsharp3HaloWidth',
            'desc' => [
                'en' => 'Unsharp 3 Halo Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
