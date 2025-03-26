<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ID3Size extends AbstractTagGroup
{
    protected string $id = 'File:ID3Size';

    protected string $name = 'ID3Size';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'ID3 Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 85184
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Extra.File:ID3Size',
            'desc' => [
                'en' => 'ID3 Size',
            ],
        ],
    ];

    protected int $count = 0;
}
