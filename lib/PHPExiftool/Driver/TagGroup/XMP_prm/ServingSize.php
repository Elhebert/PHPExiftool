<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ServingSize extends AbstractTagGroup
{
    protected string $id = 'XMP-prm:ServingSize';

    protected string $name = 'ServingSize';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prm
             * line : 411255
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::prm.XMP-prm:ServingSize',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
