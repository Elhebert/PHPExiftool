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
class Face5Position extends AbstractTagGroup
{
    protected string $id = 'Ricoh:Face5Position';

    protected string $name = 'Face5Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 5 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::FaceInfo
             * line : 233173
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Ricoh::FaceInfo.Ricoh:Face5Position',
            'desc' => [
                'en' => 'Face 5 Position',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
