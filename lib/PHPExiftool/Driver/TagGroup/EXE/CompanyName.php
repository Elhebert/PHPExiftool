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
class CompanyName extends AbstractTagGroup
{
    protected string $id = 'EXE:CompanyName';

    protected string $name = 'CompanyName';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : EXE::PEString
             * line : 109078
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::PEString.EXE:CompanyName',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
