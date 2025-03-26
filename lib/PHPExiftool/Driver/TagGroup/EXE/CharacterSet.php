<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CharacterSet extends AbstractTagGroup
{
    protected string $id = 'EXE:CharacterSet';

    protected string $name = 'CharacterSet';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : EXE::PEString
             * line : 109010
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::PEString.EXE:CharacterSet',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
