<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ManufactureDate extends AbstractTagGroup
{
    protected string $id = 'Pentax:ManufactureDate';

    protected string $name = 'ManufactureDate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Manufacture Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::CameraInfo
             * line : 197376
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::CameraInfo.Pentax:ManufactureDate',
            'desc' => [
                'en' => 'Manufacture Date',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
