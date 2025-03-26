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
class AFMode extends AbstractTagGroup
{
    protected string $id = 'Minolta:AFMode';

    protected string $name = 'AFMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraInfoA100
             * line : 121708
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraInfoA100.Minolta:AFMode',
            'desc' => [
                'en' => 'AF Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
