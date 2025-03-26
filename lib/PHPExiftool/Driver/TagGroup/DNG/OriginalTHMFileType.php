<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalTHMFileType extends AbstractTagGroup
{
    protected string $id = 'DNG:OriginalTHMFileType';

    protected string $name = 'OriginalTHMFileType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::OriginalRaw
             * line : 105280
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DNG::OriginalRaw.DNG:OriginalTHMFileType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
