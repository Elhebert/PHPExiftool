<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_header;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProfileFileSignature extends AbstractTagGroup
{
    protected string $id = 'ICC-header:ProfileFileSignature';

    protected string $name = 'ProfileFileSignature';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Header
             * line : 144153
             * type : string
             * writable : false
             * count : 4
             * flags :
             */
            'id' => 'ICC_Profile::Header.ICC-header:ProfileFileSignature',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;
}
