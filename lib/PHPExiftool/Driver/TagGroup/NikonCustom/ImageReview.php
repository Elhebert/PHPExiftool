<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageReview extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ImageReview';

    protected string $name = 'ImageReview';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Review',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145659
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:ImageReview',
            'desc' => [
                'en' => 'Image Review',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153438
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:ImageReview',
            'desc' => [
                'en' => 'Image Review',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
