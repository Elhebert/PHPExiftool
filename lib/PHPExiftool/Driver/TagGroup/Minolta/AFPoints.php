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
class AFPoints extends AbstractTagGroup
{
    protected string $id = 'Minolta:AFPoints';

    protected string $name = 'AFPoints';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Points',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122706
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:AFPoints',
            'desc' => [
                'en' => 'AF Points',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
