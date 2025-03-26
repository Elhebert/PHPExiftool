<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifTool;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NewGUID extends AbstractTagGroup
{
    protected string $id = 'ExifTool:NewGUID';

    protected string $name = 'NewGUID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'New GUID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 85211
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Extra.ExifTool:NewGUID',
            'desc' => [
                'en' => 'New GUID',
            ],
        ],
    ];

    protected int $count = 0;
}
