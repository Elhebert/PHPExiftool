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
class Publisher extends AbstractTagGroup
{
    protected string $id = 'ISO:Publisher';

    protected string $name = 'Publisher';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Publisher',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ISO::PrimaryVolume
             * line : 104715
             * type : string
             * writable : false
             * count : 128
             * flags :
             */
            'id' => 'ISO::PrimaryVolume.ISO:Publisher',
            'desc' => [
                'en' => 'Publisher',
            ],
        ],
    ];

    protected int $count = 128;
}
