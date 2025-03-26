<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ISO;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VolumeBlockSize extends AbstractTagGroup
{
    protected string $id = 'ISO:VolumeBlockSize';

    protected string $name = 'VolumeBlockSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ISO::PrimaryVolume
             * line : 152010
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ISO::PrimaryVolume.ISO:VolumeBlockSize',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
