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
class RAFVersion extends AbstractTagGroup
{
    protected string $id = 'File:RAFVersion';

    protected string $name = 'RAFVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 121524
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Extra.File:RAFVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
