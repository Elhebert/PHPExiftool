<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureProgram extends AbstractTagGroup
{
    protected string $id = 'H264:ExposureProgram';

    protected string $name = 'ExposureProgram';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Exposure Program',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : H264::Camera1
             * line : 97941
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::Camera1.H264:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        1 => [
            /**
             * table_name : H264::MDPM
             * line : 98028
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MDPM.H264:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
    ];

    protected int $count = 0;
}
