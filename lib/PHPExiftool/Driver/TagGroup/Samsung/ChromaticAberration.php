<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChromaticAberration extends AbstractTagGroup
{
    protected string $id = 'Samsung:ChromaticAberration';

    protected string $name = 'ChromaticAberration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Type2
             * line : 335616
             * type : int16u
             * writable : true
             * count : 22
             * flags : permanent,unknown
             */
            'id' => 'Samsung::Type2.Samsung:ChromaticAberration',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 22;

    protected int $flags = 2084;
}
