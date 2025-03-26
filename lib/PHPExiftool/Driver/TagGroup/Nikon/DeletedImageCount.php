<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DeletedImageCount extends AbstractTagGroup
{
    protected string $id = 'Nikon:DeletedImageCount';

    protected string $name = 'DeletedImageCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Deleted Image Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 134565
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:DeletedImageCount',
            'desc' => [
                'en' => 'Deleted Image Count',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfo
             * line : 138019
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfo.Nikon:DeletedImageCount',
            'desc' => [
                'en' => 'Deleted Image Count',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
