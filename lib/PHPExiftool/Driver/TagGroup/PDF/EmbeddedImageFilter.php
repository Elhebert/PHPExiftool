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
class EmbeddedImageFilter extends AbstractTagGroup
{
    protected string $id = 'PDF:EmbeddedImageFilter';

    protected string $name = 'EmbeddedImageFilter';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PDF::Im
             * line : 264121
             * type : ?
             * writable : false
             * count :
             * flags : list
             */
            'id' => 'PDF::Im.PDF:EmbeddedImageFilter',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 64;
}
