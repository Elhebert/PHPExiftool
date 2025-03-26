<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EmbeddedImageHeight extends AbstractTagGroup
{
    protected string $id = 'PDF:EmbeddedImageHeight';

    protected string $name = 'EmbeddedImageHeight';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PDF::Im
             * line : 264125
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PDF::Im.PDF:EmbeddedImageHeight',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
