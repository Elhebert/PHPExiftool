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
class SaturationAdj extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:SaturationAdj';

    protected string $name = 'SaturationAdj';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::HighlightData
             * line : 210401
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::HighlightData.NikonCapture:SaturationAdj',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : NikonCapture::PictureCtrl
             * line : 211243
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::PictureCtrl.NikonCapture:SaturationAdj',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
