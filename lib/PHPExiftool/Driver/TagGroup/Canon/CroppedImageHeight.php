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
class CroppedImageHeight extends AbstractTagGroup
{
    protected string $id = 'Canon:CroppedImageHeight';

    protected string $name = 'CroppedImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Cropped Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::AspectInfo
             * line : 2772
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AspectInfo.Canon:CroppedImageHeight',
            'desc' => [
                'en' => 'Cropped Image Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
