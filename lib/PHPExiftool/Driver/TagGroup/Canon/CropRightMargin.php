<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CropRightMargin extends AbstractTagGroup
{
    protected string $id = 'Canon:CropRightMargin';

    protected string $name = 'CropRightMargin';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Crop Right Margin',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CropInfo
             * line : 48130
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CropInfo.Canon:CropRightMargin',
            'desc' => [
                'en' => 'Crop Right Margin',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
