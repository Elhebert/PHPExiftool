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
class BuildDate extends AbstractTagGroup
{
    protected string $id = 'EXE:BuildDate';

    protected string $name = 'BuildDate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : EXE::PEString
             * line : 109002
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::PEString.EXE:BuildDate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
