<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Face1Position extends AbstractTagGroup
{
    protected string $id = 'Ricoh:Face1Position';

    protected string $name = 'Face1Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 1 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::FaceInfo
             * line : 233161
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Ricoh::FaceInfo.Ricoh:Face1Position',
            'desc' => [
                'en' => 'Face 1 Position',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
