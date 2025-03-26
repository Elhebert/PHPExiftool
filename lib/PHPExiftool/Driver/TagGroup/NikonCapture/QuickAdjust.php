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
class QuickAdjust extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:QuickAdjust';

    protected string $name = 'QuickAdjust';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Quick Adjust',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::PictureCtrl
             * line : 142027
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::PictureCtrl.NikonCapture:QuickAdjust',
            'desc' => [
                'en' => 'Quick Adjust',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
