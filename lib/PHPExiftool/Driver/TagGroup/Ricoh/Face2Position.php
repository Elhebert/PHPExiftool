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
class Face2Position extends AbstractTagGroup
{
    protected string $id = 'Ricoh:Face2Position';

    protected string $name = 'Face2Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Face 2 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::FaceInfo
             * line : 233164
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Ricoh::FaceInfo.Ricoh:Face2Position',
            'desc' => [
                'en' => 'Face 2 Position',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
