<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraID extends AbstractTagGroup
{
    protected string $id = 'Sanyo:CameraID';

    protected string $name = 'CameraID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sanyo::Main
             * line : 235750
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sanyo::Main.Sanyo:CameraID',
            'desc' => [
                'en' => 'Camera ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
