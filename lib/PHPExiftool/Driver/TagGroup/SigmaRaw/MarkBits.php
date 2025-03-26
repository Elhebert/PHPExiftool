<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SigmaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MarkBits extends AbstractTagGroup
{
    protected string $id = 'SigmaRaw:MarkBits';

    protected string $name = 'MarkBits';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SigmaRaw::Header
             * line : 339332
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'SigmaRaw::Header.SigmaRaw:MarkBits',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
