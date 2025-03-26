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
class HueAdj extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:HueAdj';

    protected string $name = 'HueAdj';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hue Adj',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::PictureCtrl
             * line : 142042
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::PictureCtrl.NikonCapture:HueAdj',
            'desc' => [
                'en' => 'Hue Adj',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
