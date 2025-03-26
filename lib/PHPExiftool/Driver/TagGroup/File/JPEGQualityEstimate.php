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
class JPEGQualityEstimate extends AbstractTagGroup
{
    protected string $id = 'File:JPEGQualityEstimate';

    protected string $name = 'JPEGQualityEstimate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 121453
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Extra.File:JPEGQualityEstimate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
