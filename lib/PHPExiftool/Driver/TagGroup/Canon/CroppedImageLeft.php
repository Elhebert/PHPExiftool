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
class CroppedImageLeft extends AbstractTagGroup
{
    protected string $id = 'Canon:CroppedImageLeft';

    protected string $name = 'CroppedImageLeft';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Cropped Image Left',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::AspectInfo
             * line : 2775
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AspectInfo.Canon:CroppedImageLeft',
            'desc' => [
                'en' => 'Cropped Image Left',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
