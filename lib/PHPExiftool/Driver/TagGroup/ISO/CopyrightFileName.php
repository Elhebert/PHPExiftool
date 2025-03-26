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
class CopyrightFileName extends AbstractTagGroup
{
    protected string $id = 'ISO:CopyrightFileName';

    protected string $name = 'CopyrightFileName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ISO::PrimaryVolume
             * line : 152059
             * type : string
             * writable : false
             * count : 38
             * flags :
             */
            'id' => 'ISO::PrimaryVolume.ISO:CopyrightFileName',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 38;
}
