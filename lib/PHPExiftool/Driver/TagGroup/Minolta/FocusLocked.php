<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocusLocked extends AbstractTagGroup
{
    protected string $id = 'Minolta:FocusLocked';

    protected string $name = 'FocusLocked';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Locked',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraInfoA100
             * line : 121656
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraInfoA100.Minolta:FocusLocked',
            'desc' => [
                'en' => 'Focus Locked',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
