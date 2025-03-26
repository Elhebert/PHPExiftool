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
class ImageUniqueID extends AbstractTagGroup
{
    protected string $id = 'SigmaRaw:ImageUniqueID';

    protected string $name = 'ImageUniqueID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SigmaRaw::Header
             * line : 339314
             * type : undef
             * writable : false
             * count : 16
             * flags :
             */
            'id' => 'SigmaRaw::Header.SigmaRaw:ImageUniqueID',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 16;
}
